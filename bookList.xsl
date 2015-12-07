<?xml version= "1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template  match="/">
    <html>
    <body>
    <H2> List of Books </h2>
        <table border="1">
            <tr bgcolor="#d3d3d3"> 
                <th style="text-align:left">Category:</th>
                <th style="text-align:left">Title:</th>
                <th style="text-align:left">Author:</th>
                <th style="text-align:left">Year:</th>
                <th style="text-align:left">Recommended Age:</th>
                <th style="text-align:left">Description:</th>
                <th style="text-align:left">Price:</th>
            </tr>
            <xsl:for-each select="books/book"></xsl:for-each>
            <tr>
                <td><xsl:value-of select="book"/></td>
                <td><xsl:value-of select="title"/></td>
                <td><xsl:value-of select="author"/></td>
                <td><xsl:value-of select="year"/></td>
                <td><xsl:value-of select="ageRating"/></td>
                <td><xsl:value-of select="description"/></td>
                <td><xsl:value-of select="price"/></td>
            </tr>
            </xsl:for-each>
        </table>
    </body> 
    </html>
</xsl:template>
</xsl:stylesheet>   