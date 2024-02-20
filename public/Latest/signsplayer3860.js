
var ItemURL = "https://mindrocketsapis.com/web/TranslateJSWithLabelBoosted.aspx?r={0}&render=1";
function UseFullGifLoad() {
  if (jQuery("#MrReviewEnabled").length <= 0) {
    ItemURL = "https://mindrocketsapis.com/web/TranslateJSWithLabel.aspx?r={0}&render=1";
  }
}
function UseExpressGifLoad() {
  if (jQuery("#MrReviewEnabled").length <= 0) {
    ItemURL = "https://mindrocketsapis.com/web/TranslateJSWithLabelV2.aspx?r={0}&render=1";
  }
}
function UseEngXLoad() {
  if (jQuery("#MrReviewEnabled").length <= 0) {
    ItemURL = "https://mindrocketsinc.com/engine/engxtranslate.aspx?r={0}&render=1&accent=" + MrAccent;
  }
}


var MRAppCat = undefined;
var MRAppInfo = undefined;
var MrDavSkin=undefined;
function UseBoostedGifLoad() {
  if (jQuery("#MrReviewEnabled").length <= 0) {
    ItemURL = "https://mindrocketsapis.com/web/TranslateJSWithLabelBoosted.aspx?r={0}&render=1";
  }
}


function createPlayer(selector, text, w, h, speed, ID, lang, src, av, clientId, SourceLabel) {

    var ItemURLtext = ItemURL.toString().MRformat(encodeURI(text));
    if (w != undefined && w != null) {
        ItemURLtext += "&w=" + w.toString();
    }
    if (h != undefined && h != null) {
        ItemURLtext += "&h=" + h.toString();
    }
    if (ID != undefined && ID != null) {
        ItemURLtext += "&ID=" + ID.toString();
    }
    if (speed != undefined && speed != null) {
        ItemURLtext += "&speed=" + speed.toString();
    }
    if (lang != undefined && lang != null) {
        ItemURLtext += "&lang=" + lang.toString();
    }
    if (src != undefined && src != null) {
        ItemURLtext += "&src=" + src.toString();
    }
    if (av != undefined && av != null) {
        ItemURLtext += "&av=" + av.toString();
    }
    if (clientId != undefined && clientId != null) {
        ItemURLtext += "&cid=" + clientId.toString();
    }
    if (SourceLabel != undefined) {
        ItemURLtext += "&srclabel=true";
    }
    if (MRAppCat!=undefined) {
        ItemURLtext += "&cat="+MRAppCat;
    }
    if (MRAppInfo!=undefined) {
        ItemURLtext += "&cinfo=" + MRAppInfo;
    }

    if (MrDavSkin != undefined) {
        ItemURLtext += "&dav=" + MrDavSkin;
    }
    //console.log('url=' + ItemURLtext);
    //console.log('source item=' + src);
    jQuery(selector).append(('<iframe src="{0}" id="mr_sign_player' + ID.toString() + '" ' + ((w != undefined && w != null) ? ' width="' + w + '" ' : '" ') + ((h != undefined && h != null) ? ' height="' + h.toString() + '"' : '') + '  frameBorder="0" scrolling="no" />').toString().MRformat(ItemURLtext));
}

function MRSetDisplayAvatar(mrDav)
{
MrDavSkin=mrDav;

}
function MRGetSignItemURL(text, w, h, speed, ID, lang, src, av, clientId, SourceLabel) {
    text = text.trim();
    var ItemURLtext = ItemURL.toString().MRformat(encodeURI(text));
    if (w != undefined && w != null) {
        ItemURLtext += "&w=" + w.toString();
    }
    if (h != undefined && h != null) {
        ItemURLtext += "&h=" + h.toString();
    }
    if (ID != undefined && ID != null) {
        ItemURLtext += "&ID=" + ID.toString();
    }
    if (speed != undefined && speed != null) {
        ItemURLtext += "&speed=" + speed.toString();
    }
    if (lang != undefined && lang != null) {
        ItemURLtext += "&lang=" + lang.toString();
    }
    if (src != undefined && src != null) {
        ItemURLtext += "&src=" + src.toString();
    }
    if (av != undefined && av != null) {
        ItemURLtext += "&av=" + av.toString();
    }
    if (clientId != undefined && clientId != null) {
        ItemURLtext += "&cid=" + clientId.toString();
    }
    if (SourceLabel != undefined) {
        ItemURLtext += "&srclabel=true";
    }
    if (MRAppCat != undefined) {
        ItemURLtext += "&cat=" + MRAppCat;
    }
    if (MRAppInfo != undefined) {
        ItemURLtext += "&cinfo=" + MRAppInfo;
    }
    if (MrDavSkin != undefined) {
        ItemURLtext += "&dav=" + MrDavSkin;
    }
    return ItemURLtext;
}

function createPlayerForMultiText(selector, textList, w, h, speed, ID) {

    jQuery(selector).append(('<iframe class="mriframe" src="{0}" ' + ((w != undefined && w != null) ? +'width="' + w : '" ') + ((h != undefined && h != null) ? ' height="' + h : '" ') + '"  frameBorder="0" scrolling="no" />').toString().MRformat(''));

    var currentIndex = -1;
    var DoAnimation = function () {
        currentIndex++;
        if (currentIndex < 0 || currentIndex >= textList.length) {
            currentIndex = 0;
        }
        var text = textList[currentIndex];
        var ItemURLtext = ItemURL.toString().MRformat(encodeURI(text));
        if (w != undefined && w != null) {
            ItemURLtext += "&w=" + w.toString();
        }
        if (h != undefined && h != null) {
            ItemURLtext += "&h=" + h.toString();
        }
        if (ID != undefined && ID != null) {
            ItemURLtext += "&ID=" + ID.toString();
        }
        if (speed != undefined && speed != null) {
            ItemURLtext += "&speed=" + speed.toString();
        }
        jQuery(selector).find('.mriframe').attr('src', ItemURLtext);
        //  //console.log('item change ' + currentIndex + ' ' + ItemURLtext);
    };
    DoAnimation();
    setInterval(DoAnimation, 60000);
}

function generatePlayer(text, w, h, speed, ID) {

    ////console.log("text is:"+text);
    var ItemURLtext = ItemURL.toString().MRformat(encodeURI(text));
    ////console.log("ItemURL is:"+ItemURLtext);
    if (w != undefined && w != null) {
        ItemURLtext += "&w=" + w.toString();
    }
    if (h != undefined && h != null) {
        ItemURLtext += "&h=" + h.toString();
    }
    if (ID != undefined && ID != null) {
        ItemURLtext += "&ID=" + ID.toString();
    }
    if (speed != undefined && speed != null) {
        ItemURLtext += "&speed=" + speed.toString();
    }
    return (('<iframe src="{0}" ' + ((w != undefined && w != null) ? +'width="' + w : '" ') + ((h != undefined && h != null) ? ' height="' + h : '" ') + '"  frameBorder="0" scrolling="no" />').toString().MRformat(ItemURLtext));
}