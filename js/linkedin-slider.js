/**
 * Deltacab LinkedIn Card Slider
 * Matches Instagram & Facebook card size, format, and slider behavior
 */
(function () {
    'use strict';

    // Deltacab initial curated posts from actual feed
    var defaultPosts = [
        {
            id: "7512829138605592576",
            date: "October 2026",
            url: "https://www.linkedin.com/feed/update/urn:li:activity:7512829138605592576",
            img: "https://data-image.sociablekit.com/sources/linkedin-page-posts/deltacab-wires-cables-and-cords/7512829138605592576-images-0.webp?nocache=1792215447",
            fallbackImg: "image/products/Flat Travelling Cables.JPG",
            text: "We Are Participating! | DeltaCab at ISEE India International Elevator Expo 2026, showcasing high-performance wires, cables, and cord solutions engineered for the Elevator & Escalator Industry."
        },
        {
            id: "7511613594648846336",
            date: "October 2026",
            url: "https://www.linkedin.com/feed/update/urn:li:activity:7511613594648846336",
            img: "https://data-image.sociablekit.com/sources/linkedin-page-posts/deltacab-wires-cables-and-cords/7511613594648846336-images-0.webp?nocache=1792215447",
            fallbackImg: "image/products/Cables.JPG",
            text: "Remembering Mahatma Gandhi on his birth anniversary. May his timeless values of truth, peace, and non-violence continue to inspire us to build a better tomorrow. Happy Gandhi Jayanti!"
        },
        {
            id: "7125114108298866688",
            date: "November 2023",
            url: "https://www.linkedin.com/feed/update/urn:li:activity:7125114108298866688",
            img: "imgs/Automated Manufacturing (1).jpg",
            fallbackImg: "imgs/Automated Manufacturing (1).jpg",
            text: "Deltacab is at the heart of countless industries with Industrial Wires! From manufacturing automation to green energy, infrastructure to transportation, telecom to custom-engineered cables."
        },
        {
            id: "7128569478698651648",
            date: "November 2023",
            url: "https://www.linkedin.com/feed/update/urn:li:activity:7128569478698651648",
            img: "image/products/Power Cords delta.png",
            fallbackImg: "image/products/Power Cords delta.png",
            text: "High-quality cables and wires built for demanding industrial applications. Delivering durable connectivity, superior thermal resistance, and high electrical performance."
        },
        {
            id: "7130019013492957185",
            date: "November 2023",
            url: "https://www.linkedin.com/feed/update/urn:li:activity:7130019013492957185",
            img: "image/products/delta cable new.jpeg",
            fallbackImg: "image/products/delta cable new.jpeg",
            text: "Embracing the vibrant hues of innovation and joy. Deltacab powers continuous connectivity across infrastructure, automation, and industrial networks."
        }
    ];

    var avatarUrl = "imgs/logo.png";
    var localProductFallbacks = [
        "image/products/Flat Travelling Cables.JPG",
        "image/products/Cables.JPG",
        "imgs/Automated Manufacturing (1).jpg",
        "image/products/Power Cords delta.png",
        "image/products/delta cable new.jpeg",
        "image/products/Moulded Cords.JPG"
    ];

    var linkedInIconSvg = '<svg class="linkedin-card-logo" viewBox="0 0 24 24" width="20" height="20" fill="#0A66C2" xmlns="http://www.w3.org/2000/svg"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>';

    function cleanPostText(text) {
        if (!text) return "";
        try {
            text = text.replace(/%27/g, "'").replace(/%22/g, '"').replace(/%20/g, ' ');
        } catch (e) {}

        var tmp = document.createElement("DIV");
        tmp.innerHTML = text;
        var clean = tmp.textContent || tmp.innerText || "";

        // Remove corrupted unicode / mojibake artifacts from legacy feeds
        clean = clean.replace(/[ðâ≡][\x80-\xFF]{1,4}/g, ' ');
        clean = clean.replace(/\s+/g, ' ').trim();
        return clean;
    }

    function formatDate(dateStr) {
        if (!dateStr) return "Recently";
        try {
            var d = new Date(dateStr);
            if (!isNaN(d.getTime())) {
                var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                return months[d.getMonth()] + " " + d.getFullYear();
            }
        } catch (e) {}
        return dateStr;
    }

    function highlightHashtags(text) {
        if (!text) return "";
        return text.replace(/#([\w\u0080-\uFFFF]+)/g, '<span style="color:#0A66C2;font-weight:500;">#$1</span>');
    }

    function buildCardHtml(post, idx) {
        var postUrl = post.url || "https://www.linkedin.com/company/deltacab-wires-cables-and-cords";
        var defaultFallback = localProductFallbacks[(idx || 0) % localProductFallbacks.length];
        var postImg = post.img || post.fallbackImg || defaultFallback;
        var postDate = post.date || "October 2026";
        var cleanDesc = cleanPostText(post.text || "");
        var formattedDesc = highlightHashtags(cleanDesc);

        return '' +
            '<div class="linkedin-slide">' +
                '<a href="' + postUrl + '" target="_blank" rel="noopener noreferrer" class="linkedin-card" title="View on LinkedIn">' +
                    '<div class="linkedin-card-header">' +
                        '<div class="linkedin-card-user">' +
                            '<img src="' + avatarUrl + '" alt="Deltacab" class="linkedin-card-avatar" onerror="this.src=\'imgs/logo.png\'">' +
                            '<div class="linkedin-card-info">' +
                                '<span class="linkedin-card-name">Deltacab Wires &amp; Cables</span>' +
                                '<span class="linkedin-card-date">' + postDate + '</span>' +
                            '</div>' +
                        '</div>' +
                        linkedInIconSvg +
                    '</div>' +
                    '<div class="linkedin-card-media">' +
                        '<img src="' + postImg + '" alt="Deltacab LinkedIn Post" loading="lazy" onerror="this.onerror=null;this.src=\'' + defaultFallback + '\';">' +
                    '</div>' +
                    '<div class="linkedin-card-body">' +
                        '<p class="linkedin-card-text">' + formattedDesc + '</p>' +
                        '<div class="linkedin-card-footer">' +
                            '<span class="linkedin-card-link-text">View on LinkedIn &rarr;</span>' +
                        '</div>' +
                    '</div>' +
                '</a>' +
            '</div>';
    }

    function initSlider() {
        var track = document.getElementById('linkedinTrack');
        var prevBtn = document.getElementById('linkedinPrevBtn');
        var nextBtn = document.getElementById('linkedinNextBtn');
        var container = document.getElementById('linkedinFeedCardSlider');

        if (!track) return;

        var currentIndex = 0;
        var totalSlides = 0;
        var autoPlayTimer = null;
        var autoPlayDelay = 4500; // 4.5 seconds autoplay

        function render(posts) {
            if (!posts || posts.length === 0) return;
            var html = '';
            for (var i = 0; i < posts.length; i++) {
                html += buildCardHtml(posts[i], i);
            }
            track.innerHTML = html;
            totalSlides = posts.length;
            currentIndex = 0;
            updateTrackPosition();
        }

        function updateTrackPosition() {
            if (totalSlides === 0) return;
            var offset = -currentIndex * 100;
            track.style.transform = 'translateX(' + offset + '%)';
        }

        function nextSlide() {
            if (totalSlides === 0) return;
            currentIndex = (currentIndex + 1) % totalSlides;
            updateTrackPosition();
        }

        function prevSlide() {
            if (totalSlides === 0) return;
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateTrackPosition();
        }

        function startAutoPlay() {
            stopAutoPlay();
            autoPlayTimer = setInterval(nextSlide, autoPlayDelay);
        }

        function stopAutoPlay() {
            if (autoPlayTimer) {
                clearInterval(autoPlayTimer);
                autoPlayTimer = null;
            }
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function (e) {
                e.preventDefault();
                nextSlide();
                startAutoPlay();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', function (e) {
                e.preventDefault();
                prevSlide();
                startAutoPlay();
            });
        }

        if (container) {
            container.addEventListener('mouseenter', stopAutoPlay);
            container.addEventListener('mouseleave', startAutoPlay);

            // Touch swipe support for mobile
            var touchStartX = 0;
            var touchEndX = 0;
            container.addEventListener('touchstart', function (e) {
                touchStartX = e.changedTouches[0].screenX;
            }, { passive: true });
            container.addEventListener('touchend', function (e) {
                touchEndX = e.changedTouches[0].screenX;
                if (touchStartX - touchEndX > 45) {
                    nextSlide();
                    startAutoPlay();
                } else if (touchEndX - touchStartX > 45) {
                    prevSlide();
                    startAutoPlay();
                }
            }, { passive: true });
        }

        // Render initial default posts immediately (zero lag)
        render(defaultPosts);
        startAutoPlay();

        // Fetch live posts from API
        fetchLivePosts(function (livePosts) {
            if (livePosts && livePosts.length > 0) {
                render(livePosts);
                startAutoPlay();
            }
        });
    }

    function fetchLivePosts(callback) {
        var feedUrl = "https://data.accentapi.com/feed/225615.json";
        var xhr = new XMLHttpRequest();
        xhr.open("GET", feedUrl, true);
        xhr.timeout = 7000;
        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                try {
                    var data = JSON.parse(xhr.responseText);
                    if (data && data.posts && data.posts.length > 0) {
                        var parsed = [];
                        for (var i = 0; i < data.posts.length; i++) {
                            var p = data.posts[i];
                            var candidateImg = (p.images && p.images[0]) ||
                                               (p.image_urls && p.image_urls[0]) ||
                                               p.thumbnail_url || "";

                            // If old sociablekit domain, replace with fallback
                            if (candidateImg.indexOf("images.sociablekit.com") !== -1) {
                                candidateImg = fallbackProductImg;
                            }

                            var desc = (p.description_raw || p.description || "").trim();
                            if (desc) {
                                parsed.push({
                                    id: p.id,
                                    date: formatDate(p.post_date_time),
                                    url: p.post_url || ("https://www.linkedin.com/feed/update/urn:li:activity:" + p.id),
                                    img: candidateImg || fallbackProductImg,
                                    fallbackImg: fallbackProductImg,
                                    text: desc
                                });
                            }
                            if (parsed.length >= 8) break; // Keep top 8 posts for smooth slider
                        }
                        if (parsed.length > 0) {
                            callback(parsed);
                        }
                    }
                } catch (e) {
                    console.warn("LinkedIn feed live parse error:", e);
                }
            }
        };
        xhr.onerror = function () {};
        xhr.send();
    }

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initSlider);
    } else {
        initSlider();
    }
})();
