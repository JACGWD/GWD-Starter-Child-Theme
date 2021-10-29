# GWD Child Theme Fonts

Add your font files here. Fonts hosted directly on your server are faster to download for your site visitors, offers better performance and reduces your reliance on third party servers.

As often as possible, use the @font-face rule to use local fonts. You can find information on how to write the @font-face rule [at W3Schools](https://www.w3schools.com/cssref/css3_pr_font-face_rule.asp) or on the [Mozilla Developer Pages](https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face).

Please make sure to use the LOCAL attribute first, so that the font doesn't get downloaded if it is already installed on the system. See below.

    @font-face {
    font-family: "My Font";
    src: local("My Font Bold"),
         url(fonts/myfont/MyFontBold.woff2);
         url(fonts/myfont/MyFontBold.ttf);
    font-weight: bold;
    }

Please supply at least two different formats (ex: woff2 and truetype) to maximize font compatibility.

## Different font styles and weights
You will need to write a new @font-face rule for every different font style. For example: one for regular, one for bold and another for italic.

## Font conversion sites
If you have only one font format (like TrueType), you can use an online font conversion service like https://cloudconvert.com/ttf-to-woff2 
Please search for them online. There are many different sites that offer conversion.

## Using Google Fonts
If you are going to use Google Fonts, please uncomment lines 31-40 of functions.php (change URL to your font on line 36). You can repeat line 38 as many times as necessary, just make sure to change the name of the font (the -lato in the 'google-fonts-lato' part) and edit the URL to the one that Google gives you for your chosen font.

## Adobe Fonts
In order to use Adobe fonts, please refer to the help page: https://helpx.adobe.com/fonts/using/add-fonts-website.html

