<!DOCTYPE html>

<html>

<head runat="server">

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow">
    <meta name="distribution" content="local">
    <meta name="web_author" content="Delta Cab">
    <meta name="revisit-after" content="7 days">
    <meta name="geo.region" content="IN-MH" />
    <meta name="geo.placename" content="Palghar" />
    <meta name="geo.position" content="19.432370, 72.859037" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.deltacab.co.in/" />
    <meta property="og:site_name" content=" Deltacab " />
    <meta property="og:image" content=" https://www.deltacab.co.in/imgs/logo.png " />
    <meta property="og:image:secure_url" content=" https://www.deltacab.co.in/imgs/logo.png " />
    <meta property="og:image:alt" content=" Electrical Wires and Cables - Delta Cab " />
    <meta property="og:image:type" content="image/png" />
    <meta property="product:brand" content=" Deltacab " />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content=" @deltacab_ " />
    <meta name="twitter:creator" content=" @deltacab_ " />
    <meta name="twitter:image" content=" https://www.deltacab.co.in/imgs/logo.png " />
    <meta name="twitter:label1" content="Written by" />
    <meta name="twitter:data1" content=" Aakarsh Khandhar " />
    <meta name="twitter:label2" content="Time to read" />
    <meta name="twitter:data2" content="2 minutes" />


    <link rel="icon" href="imgs/logo.png" type="imgs/logo.png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="css/vendor.bundle.css">
    <link href="css/style62ea.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">


    <style>
        /* Status bar-like UI display */
        #statusBar {
            position: fixed;
            bottom: 10px;
            left: 10px;
            background: #f0f0f0;
            padding: 8px;
            border: 1px solid #333;
            border-radius: 4px;
            font-size: 14px;
            color: #333;
            display: none;
            /* Hidden by default */
        }
    </style>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Deltacab",
            "image": "https://www.deltacab.co.in/imgs/logo.png",
            "@id": "https://www.deltacab.co.in",
            "url": "https://www.deltacab.co.in",
            "telephone": "98207 59895",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Unit No. 330 / 331 Sanghavi Industrial Estate, A-11, Plot no. 8, Survey No. 29, Navghar, Near Vasai (E) Station, Dist.",
                "addressLocality": "Thane",
                "postalCode": "401 210",
                "addressCountry": "IN"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 19.3095723,
                "longitude": 72.8588934
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday",
                    "Sunday"
                ],
                "opens": "00:00",
                "closes": "23:59"
            },
            "sameAs": [
                "https://www.facebook.com/deltacab.co.in",
                "https://twitter.com/deltacab_",
                "https://www.instagram.com/delta_cab/",
                "https://www.linkedin.com/company/83554072/admin/"
            ]
        }
    </script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-203679128-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-203679128-1');
    </script>
    <!-- Google tag GA4  (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9BDH33QHFV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-9BDH33QHFV');
    </script>






<div id="statusBar"></div>
        <script>
            // Select all nav links and the statusBar div
            const links = document.querySelectorAll('nav a');
            const statusBar = document.getElementById('statusBar');

            links.forEach(link => {
                const originalHref = link.getAttribute('href');

                if (originalHref) {
                    const fileName = extractFileName(originalHref);
                    if (fileName) {
                        link.setAttribute('data-file', fileName);
                    }

                    // Mouse hover events
                    link.addEventListener('mouseover', function() {
                        const fileName = this.getAttribute('data-file');
                        if (fileName) {
                            showStatusBar(fileName);
                        }
                    });

                    link.addEventListener('mouseout', function() {
                        hideStatusBar();
                    });
                }
            });

            // Helper: Extract the file name safely
            function extractFileName(href) {
                const match = href.match(/([^\/]+\.php)/); // Match only the file name ending in '.php'
                return match ? match[1].split('.php')[0] : null; // Strip .php
            }

            // Helper: Display the name in a custom UI element
            function showStatusBar(name) {
                statusBar.textContent = name;
                statusBar.style.display = 'block';
            }

            // Helper: Hide the UI display
            function hideStatusBar() {
                statusBar.style.display = 'none';
            }
        </script>

        <script>
            link.addEventListener('mouseover', function() {
                console.log('Hovered over: ', this.getAttribute('data-file'));
            });
        </script>

