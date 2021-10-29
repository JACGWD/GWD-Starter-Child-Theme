# GWD Child Theme Fonts

Add your font files here. Fonts hosted directly on your server are faster to download for your site visitors, offers better performance and reduces your reliance on third party servers.

As often as possible, use the @font-face rule to use local fonts. You can find information on how to write the @font-face rule [at W3Schools](https://www.w3schools.com/cssref/css3_pr_font-face_rule.asp) or on the [Mozilla Developer Pages](https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face).

Please make sure to use the LOCAL attribute first, so that the font doesn't get downloaded if it is already installed on the system. See below.

    @font-face {
    font-family: MyHelvetica;
    src: local("Helvetica Neue Bold"),
         local("HelveticaNeue-Bold"),
        url(HelveticaBold.ttf);
    font-weight: bold;
    }

## Using Google Fonts
If you are going to use Google Fonts, please uncomment lines 31-40 of functions.php (change URL to your font on line 36). You can repeat line 38 as many times as necessary, just make sure to change the name of the font (the -lato in the 'google-fonts-lato' part) and edit the URL to the one that Google gives you for your chosen font.

## Adobe Fonts
In order to use Adobe fonts, please refer to the help page: https://helpx.adobe.com/fonts/using/add-fonts-website.html

