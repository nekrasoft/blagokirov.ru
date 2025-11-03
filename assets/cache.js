function handleCacheRequest(action, successMessage) {
    var data = { action: action };

    jQuery.ajax({
        type: "POST",
        url: tenweb.ajaxurl,
        data: data,
        success: function (response) {
            var response = JSON.parse(response);
            if (typeof response.error != "undefined") {
                jQuery('#tenweb_cache_dropdown_message').removeClass('hidden').addClass('error');
                jQuery('#tenweb_cache_dropdown_message p').html(response.error);
            } else {
                jQuery('#tenweb_cache_dropdown_message').removeClass('hidden').addClass('success');
                jQuery('#tenweb_cache_dropdown_message p').html(successMessage || response.message);
            }
            jQuery("#my-dismiss-admin-message").click(function(event) {
                event.preventDefault();
                jQuery('#tenweb_cache_dropdown_message').addClass("hidden");
            });
        },
        failure: function (errorMsg) {
            console.log('Failure: ' + errorMsg);
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function tenwebCachePurge() {
    handleCacheRequest('tenweb_cache_purge_all');
}

function tenwebCachePurgeDropdown() {
    handleCacheRequest('tenweb_cache_purge_all');
}

function tenwebCloudflareCachePurge() {
    handleCacheRequest('tenweb_cache_purge_cloudflare');
}

function tenwebClearSOCache() {
    handleCacheRequest('tenweb_cache_purge_optimizer');
}

function tenwebClearAllCache() {
    handleCacheRequest('tenweb_cache_clear_all', "All caches cleared successfully!");
}

function tenwebCFCachePurgeDropdown() {
    handleCacheRequest('tenweb_cf_cache_purge');
}

function tenwebClearObjectCache() {
    handleCacheRequest('tenweb_clear_object_cache', "Object cache cleared successfully!");
}
