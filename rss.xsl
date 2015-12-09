<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html"/>

    <!-- suppress default default text node output -->
    <xsl:template match="text()"/>
    
    <xsl:template match="/rss/channel/item">
	<h2><a href="{link}"><xsl:value-of select="title"/></a></h2>
	<div>
	    <xsl:value-of select="description" disable-output-escaping="yes"/>
	</div>
    </xsl:template>
</xsl:stylesheet>
<!--http://www.evagoras.com/2011/02/10/improving-an-xml-feed-display-through-css-and-xslt/-->