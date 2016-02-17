/**
 *
 * Force Target Blank on External URL Links
 *
 */

$(document).ready(function () {.each(function () {
        // this part checks if the link is external
        if (this.href.indexOf(location.hostname) == -1) {
            // add a class for external links
            $(this).addClass("ext")
            // make the link open in a new tab/window
            .attr({
                "target": "_blank",
                "rel": "external"
            })
            track clicks of external links
            if you use Google Analytics.click(function () {
                _gaq.push(["_trackEvent", "Outgoing link", "click", $(this).attr("href")]);
            });
        }
    });
});