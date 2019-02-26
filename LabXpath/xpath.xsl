<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="/">
        <html>
            <body>
                <b> ----------- PATH EXPRESSIONS----------- </b>
                <h1>
                    Actors that worked with the actor Nicolas Cage in some movie. The output should not contain Nicolas Cage himself
                </h1>
                <xsl:for-each select="movies/movie[actor ='Nicolas Cage']/actor[not(text() ='Nicolas Cage')]">
                    <h3>
                        <xsl:value-of select="."/>
                    </h3>
                </xsl:for-each>
                <h1>Producers of any 1992 movies</h1>
                <xsl:for-each select="movies/movie[@year ='1992']/producer">
                    <h3>
                        <xsl:value-of select="."/>
                    </h3>
                </xsl:for-each>
                <h1>Title of movies with at least three actos</h1>
                <xsl:for-each select="movies/movie[count(actor)>2]/title">
                    <h3>
                        <xsl:value-of select="."/>
                    </h3>
                </xsl:for-each>
                <h1>
                    Title of following sibling of those movies whose type is comedy
                </h1>
                <xsl:for-each select="//movie[@type='comedy']/following::movie/title">
                    <h3>
                        <xsl:value-of select="."/>
                    </h3>
                </xsl:for-each>
                <h1>
                    Title of following sibling movies that follow the SECOND movie whose type is comedy.
                </h1>
                <h3>
                    Notice the difference: [@type='comedy'][2] versus //movie[@type='comedy' and position() = 2 ]
                </h3>
                <xsl:for-each select="//movie[@type='comedy'][2]/following-sibling::movie/title">
                    <h3>
                        <xsl:value-of select="."/>
                    </h3>
                </xsl:for-each>
                <h1>Actors who act as producers in the same movie</h1>
                <xsl:for-each select="//actor[normalize-space(.) = normalize-space(../producer)]">
                    <h3>
                        <xsl:value-of select="."/>
                    </h3>
                </xsl:for-each>
                <h1>
                    If all movies are from 1992, title of movies whose producer's surname is Wood. Mind the white spaces!
                </h1>
                <!--
 Nota: Si producer es atómico, no tiene estructura, entonces el concepto "surname" no existe excepto en la mente del programador  
-->
                <!--
 El programador es el define que un "surname" es un string precedido de un blanco: " Wood"  
-->
                <!--
 Pero en este caso, podría ser que Wood fuera nombre y no apellido 
-->
                <xsl:for-each select="movies[count(movie) = count(movie[@year='1992'])]/movie[producer[contains(string(.), 'Wood')]]/title">
                    <h3>
                        <xsl:value-of select="."/>
                    </h3>
                </xsl:for-each>
                <h1>
                    Title of the movies where the producer’s surname coincides with at least one of the actor’s surnames.
                </h1>
                <!--
normalize-space(): Removes leading and trailing spaces from the specified string, and replaces all internal sequences of white space with one and returns the result. 
-->
                <!--
substring-after(st1, st2): returns a string that is the rest of st1 after a st2.
-->
                <xsl:for-each select="//movie[actor[contains(., substring-after(../producer,' ')) or (contains(., normalize-space(../producer/surname)) and ../producer/surname)]]/title">
                    <h3>
                        <xsl:value-of select="."/>
                    </h3>
                </xsl:for-each>
                <h1>
                    Actors together with the list of colleagues they work with
                </h1>
                <xsl:for-each select="//actor[not (. = preceding::actor)]">
                    <!--  consider actors that have not yet appearded  -->
                    <h3>
                        <xsl:value-of select="."/>
                        :
                        <xsl:for-each select="//actor[. != current() and ../actor = current()]">
                            <!--  colleagues of the actor except himself  -->
                            <xsl:value-of select="."/>
                            ,
                        </xsl:for-each>
                    </h3>
                </xsl:for-each>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>