var MRTooltipWidth = 350;
var MRTooltipHeight = 350;
var MRAVSpeed = 48;
var isin = false;
var Id = 999;
var Avatar = "Bader";
var Lang = "ar";
var mrLang = "ar";
var Source = undefined;
var MRWBottom = 5;
var MRWLeft = 10;
var WelcomeMessage = "أهلا وسهلا حرك المؤشر على الجملة وأنا أترجم";
var MrClientID = 0;
var MrAllowLongRequest = false;
var SourceLabel = true;
var DarkMode = false;
var MRStop = false;
var MrEnableChildLoop = true;
var AllowImgs = true;
var MrAfterPluginAdd = undefined;
var AfterAddCSSClassToChildren = undefined;
var MakeRevNo = false;
var MrEnableReview = false;
var DisableOffMethod = false;
var MrCanTranslate = false;
var MrDisableHovering = false;
var MrOnStopTranslate = function () { };
var MrUseRealtimeEngine = false;
var MrHideAfterDone=true;
var MrAccent = "uae";
var MrDelayHide=false;
var MrHideTimer=undefined;
var MrIsWindowShown=false;
var MrLastPlURL=undefined;
var MrQueuedSentinces=[];
var MrIsLongSentinceListenerSet=false;
function MrActivateDelayHide()
{
MrDelayHide=true;

}
function MrSetAccent(accent) {
  MrAccent = accent;
}
function MrAllowLongQS()
{
    MrAllowLongRequest = true;
    if(!MrIsLongSentinceListenerSet){
        addEventListener("message", function (e) {
        if (e.origin.indexOf('mindrockets') > -1) {
            //console.log('done translate');

            if(MrQueuedSentinces.length>0){

                   var MrNextText=MrQueuedSentinces.shift();
                  MrTranslateTextInternal(MrNextText,true);
            }

        }



    });
    MrIsLongSentinceListenerSet=true;
    }
}
function SetDisableOffMethod()
{
    DisableOffMethod = true;
}
var PreventInterferanceToOtherIframes = true;
var MRTranslatorCSS = ".mr-cont-tooltip-window{        position: fixed;      bottom: 5px;        left: 10px;    z-index:99999999999;}\r\n.mr-tooltip{  } .Highlite{background-color:#e7e8e9;}.Darklite{background-color:rgba(156, 156, 156, 0.45);}";
function DisableChildLoop()
{
    MrEnableChildLoop = false;
}
function MrActivateTranslationService()
{
    MrEnableReview = true;
}
function MrDeactivateTranslationService() {
    MrEnableReview = false;
}
function MrPreConfigTooltip(w, h, speed, av, lang, src, cid) {
    MRTooltipWidth = w;
    MRTooltipHeight = h;
    MRAVSpeed = speed;
    mrLang = lang;
    Avatar = av;
    Source = src;
    MrClientID = cid;
    
}
function SetMrAfterPluginAdd(callback)
{
    MrAfterPluginAdd = callback;
}
function SetSourceLabel() {
    SourceLabel = true;
}

function SetDarkMode(dark)
{
    DarkMode = dark;
}
function MrSetWelcomeMessage(mgs) {
    WelcomeMessage = mgs;

}
function SetCallBackAfterAddCSSClassToChildren(callback)
{
    AfterAddCSSClassToChildren = callback;
}
var MRAllowIE = true;
var IsPluginInited = false;

function LoopChilds(MRselector)
{
    if (MrEnableChildLoop == true) {
        HandleChildren(jQuery(MRselector), 'mr-tooltip');
    }


    if (AfterAddCSSClassToChildren != undefined) {
        AfterAddCSSClassToChildren();
    }
}
function MrInitTooltip(MRselector) {

 MrLastPlURL=ItemURL;

    IsPluginInited = true;
    if (MRdetectIE()&& !MRAllowIE) {
        try {
            if (GetParam("DeafIE") == 'true') {
                //console.log("IE user");
            } else {
                SetParam("DeafIE", 'true');
                alert('this plugin is not supported on IE or edge');
            }
          
        } catch (e) {

        }
    
        return;
    }
    
    LoopChilds(MRselector);
    if (MrEnableReview)
    {
        MrReviewSite();
    }
    if (AllowImgs) {
        try {
            jQuery("img").each(function () {
                var AddCSSToImg = false;
                if (jQuery(this).attr('alt') != undefined && jQuery(this).attr('alt') != null && jQuery(this).attr('alt').toString().length > 0) {
                    jQuery(this).text(jQuery(this).attr('alt'))
                  AddCSSToImg = true;
                  jQuery(this).attr('mr-allow-long', 'true');
                } else {
                    if (jQuery(this).attr('title') != undefined && jQuery(this).attr('title') != null && jQuery(this).attr('title').toString().length > 0) {
                        jQuery(this).text(jQuery(this).attr('title'))
                        AddCSSToImg = true;
                    }
                }
                if (AddCSSToImg) {
                    jQuery(this).addClass('mr-tooltip');
                }

            });
        } catch (e) {

        }


    }
    var ItemSelector = undefined;
    try {
        ItemSelector = selector;
    } catch (e) {
        if (ItemSelector == undefined) {
            var DeafitemName = jQuery("#DeafTranslate");

            if (DeafitemName != undefined) {

                ItemSelector = jQuery(DeafitemName).parent();
                if (jQuery(ItemSelector).parent().prop("tagName").toString().toLowerCase() == 'li') {
                    ItemSelector = ItemSelector.parent();
                }
            }

        }
    }
    var ItemToAddTemplate = undefined;
    try {
        ItemToAddTemplate = ItemToAdd;
       
    } catch (e) {
        ItemToAddTemplate = jQuery("#DeafTranslate").clone();
        jQuery(ItemToAddTemplate).show();
        ItemToAddTemplate = jQuery(ItemToAddTemplate).prop('outerHTML');
    }
    var addBeforeTemplate = false;
    try {
        addBeforeTemplate = addBefore;
    } catch (e) {

    }
    try {
 
        if (typeof ItemSelector != undefined)
        {
           // //console.log("item to add is " + ItemToAdd);
            if ((typeof ItemToAddTemplate != undefined) && ItemToAddTemplate != null) {
              var StopItem = ItemToAddTemplate.toString();
              MrClearReplaceKey("stopReplace");
              StopItem = MrReplaceIfNeeded("stopReplace", StopItem, 'Sara - Sign language avatar', 'Stop sign language avatar');  
              StopItem = MrReplaceIfNeeded("stopReplace", StopItem, 'ساره - متحدثة لغة الإشارة', 'إيقاف مُتحدثة لغة الإشارة');
              StopItem = MrReplaceIfNeeded("stopReplace", StopItem, 'مترجم لغة الإشارة', ' إيقاف مترجم لغة الإشارة');
                  //.replace(/مترجم لغة الإشارة/g, "ايقاف")
              StopItem = MrReplaceIfNeeded("stopReplace", StopItem, 'نسخة الصم', 'ايقاف');
              StopItem = MrReplaceIfNeeded("stopReplace", StopItem, 'لغة الإشارة', 'ايقاف');
              StopItem = MrReplaceIfNeeded("stopReplace", StopItem, 'خدمة أصدقاء الصم', 'ايقاف');
              StopItem = MrReplaceIfNeeded("stopReplace", StopItem, 'For Deaf', 'Stop');
              StopItem = MrReplaceIfNeeded("stopReplace", StopItem, 'Sign Language Interpreter', 'Stop sign language interpreter');
       



              StopItem = MrReplaceIfNeeded("stopReplace", StopItem, 'For Hearing-impaired', 'Stop');
              StopItem = MrReplaceIfNeeded("stopReplace", StopItem, 'For Hearing impaired', 'Stop');
              StopItem = MrReplaceIfNeeded("stopReplace", StopItem, 'For Hearing Impaired', 'Stop');
              StopItem = MrReplaceIfNeeded("stopReplace", StopItem, 'For Hearing-Impaired', 'Stop');
              StopItem = MrReplaceIfNeeded("stopReplace", StopItem, 'Deaf Friends Service', 'Stop');
              StopItem = MrReplaceIfNeeded("stopReplace", StopItem, 'Sign Language', 'Stop');
                        //.replace(/نسخة الصم/g, "ايقاف")
                       //                 .replace(/لغة الإشارة/g, "ايقاف")
                                      //  .replace(/خدمة أصدقاء الصم/g, "ايقاف")
                                       
                                     //   .replace(/For Deaf/g, "Stop")
                                  //      .replace(/Sign Language Interpreter/g, "Stop")
                                    //    .replace(/For Hearing-impaired/g, "Stop")
                                      //  .replace(/For Hearing impaired/g, "Stop")
                                    //    .replace(/For Hearing Impaired/g, "Stop")
                                     //   .replace(/For Hearing-Impaired/g, "Stop")
                                     //   .replace(/Deaf Friends Service/g, "Stop")
              //                          .replace(/Sign Language/g, "Stop")
                              StopItem=StopItem.replace(/deaficon/g, "stopicon")
                                        .replace(/deaftranslate/g, "stoptranslate")
                                        .replace(/DeafTranslate/g, "TranslateStop");
               
                //console.log(" test " + StopItem);
                //console.log(" selector " + ItemSelector);
                if (addBeforeTemplate) {
                    jQuery(ItemSelector).prepend(StopItem);

                } else {
                    jQuery(ItemSelector).append(StopItem);
                }
                if (MrAfterPluginAdd!=undefined) {
                    MrAfterPluginAdd(StopItem);
                  //  console.log(ItemToAddTemplate);
                }
                jQuery("#TranslateStop,.stoptranslate").click(function () {
                    MRStop = true;
                    jQuery("#TranslateStop,.stoptranslate").remove();
                    try {
                        SetParam("DeafUser", "nouse");
                    } catch (e) {

                    }
                    
                    try {
                        jQuery(".mr-cont-tooltip-window").remove();
                        jQuery("#DeafTranslate,.deaftranslate").remove();
                        if (addBeforeTemplate) {
                            jQuery(ItemSelector).prepend(ItemToAddTemplate);

                        } else {
                            jQuery(ItemSelector).append(ItemToAddTemplate);
                        }
                        if (MrAfterPluginAdd != undefined) {
                            MrAfterPluginAdd(ItemToAddTemplate);
                        }
                        jQuery("#DeafTranslate,.deaftranslate").click(function () {
                            MRStop = false;

                            TranslateWebsite();
                            jQuery("#DeafTranslate,.deaftranslate").hide();

                      });

                      MrOnStopTranslate();
                        //set cookie
                    } catch (e) {
                        //console.log("cookie disabled");
                    }
                });
            } else {
                //console.log("MRselector was not found");
            }
        } else {
            //console.log("cannot find ItemToAdd");
        }
    } catch (e) {
        //console.log('error ' + e);
    }
    jQuery(MRselector).append('<div class="mr-cont-tooltip-window"></div>');
    MRAddCSS(MRselector);
  
    createPlayer('.mr-cont-tooltip-window', WelcomeMessage, MRTooltipWidth, MRTooltipHeight, MRAVSpeed, Id, mrLang, Source, Avatar, MrClientID, SourceLabel);
    // jQuery(".mr-cont-tooltip-window").hide();
    var LastTezt = null;
    if (jQuery("a[href='http://vibes.solutions/en/']").text().length > 0) {
        //console.log('case found');
        SplitLong('k>span', 250);
        jQuery("k>span>k").addClass('mr-tooltip');

    }
    if (!MrAllowLongRequest) {


        jQuery('.mr-tooltip').each(function () {
            if (jQuery(this).text().trim().length > 300) {
                try {
                    if (jQuery(this).prop("tagName").toLowerCase() == 'p') {
                        SplitLong(jQuery(this), 250);
                        jQuery(this).find("k").addClass('mr-tooltip');
                    }
                } catch (e) {
                    try {
                        if (jQuery(this)[0].tagName.toLowerCase() == 'p') {
                            SplitLong(jQuery(this), 250);
                            jQuery(this).find("k").addClass('mr-tooltip');
                        }
                    } catch (e2) {
                        console.log(e2);
                    }
                }

                jQuery(this).removeClass('mr-tooltip');
            }
        });
    }


    var IsFirst = true;
    function handlingMsg(e) {//alert("works")
        if ( e.origin != document.location.origin ||!PreventInterferanceToOtherIframes) {


    jQuery("ul.mr-tooltip:has(li.mr-tooltip)").removeClass('mr-tootlip');
            //  jQuery(".mr-cont-tooltip-window").hide();
    if (IsFirst) {
        MRAttachMoveEventsToPlugin();
        MrCanTranslate = true;
            }
        }

    }
    addEventListener("message", handlingMsg, true);
    if (MakeRevNo) {
        GenerateReviewId();
    }
 
}
function MRRequestTrnaslate(TextToTrans, UseReview) {
    TextToTrans = TextToTrans.replace(/([\s\r\n])+/g, " ");
    TextToTrans = TextToTrans.replace(/[\r\n]/g, " ");
    TextToTrans = TextToTrans.replace(/[\n]/g, " ");
    TextToTrans = TextToTrans.replace(/([\s\r\n])+/g, " ");
    TextToTrans = TextToTrans.replace(/\s+/g, " ");
    TextToTrans = TextToTrans.replace(/[_]/g, " ");
    TextToTrans = TextToTrans.replace(/["!@#$%^&*()°<:;>\-+=\t']/g, ' ');

    //console.log('filtered Text:' + TextToTrans);
    if (TextToTrans.trim().length == 0) {
        //console.log('no content to translate on this item');
        return;
    }
    jQuery(".mr-cont-tooltip-window").fadeIn('slow', function () { });

    var NeedsReview = UseReview;
    var SourceValue = Source;
    var SourceLabelVal = SourceLabel;
    if (Source == undefined && NeedsReview == 'true') {
        SourceValue = "rev-" + mrLang;
        SourceLabelVal = true;
    }
    jQuery("#mr_sign_player" + Id.toString()).attr('src', MRGetSignItemURL(TextToTrans, MRTooltipWidth, MRTooltipHeight, MRAVSpeed, Id, mrLang, SourceValue, Avatar, MrClientID, SourceLabelVal));

}
function visitKids(element) {

}
function MrSetDisableHovering() {
    MrDisableHovering = true;
}

function MrGetTextFromElement(elmentToOperate)
{

    var TextToTrans = getTextOnly(jQuery(elmentToOperate)).toString().trim();
    if (jQuery(elmentToOperate).attr('mr-text-go') != undefined && jQuery(elmentToOperate).attr('mr-text-go').length > 0) {
        TextToTrans = jQuery(elmentToOperate).attr('mr-text-go');
    }

    TextToTrans = TextToTrans.replace(/([\s\r\n])+/g, " ");
    TextToTrans = TextToTrans.replace(/[\r\n]/g, " ");
    TextToTrans = TextToTrans.replace(/[\n]/g, " ");
    TextToTrans = TextToTrans.replace(/\s+/g, " ");
    TextToTrans = TextToTrans.replace(/[_]/g, " ");
    TextToTrans = TextToTrans.replace(/[_]/g, " ");

    TextToTrans = TextToTrans.replace(/["!@#$%^&°*()<:;>\-+=\t']/g, '');
  if (jQuery(this).attr('mr-allow-long') != 'true' && ((!MrAllowLongRequest && TextToTrans.length > 300) || (MrAllowLongRequest && TextToTrans.length > 2500))) {
    //console.log('item has been trimed');
    return null;
  } else {
        if (TextToTrans.length > 0 && (MrAllowLongRequest || jQuery(elmentToOperate).text().trim().length < 300)) {

            var itemR = jQuery(elmentToOperate).clone();
            try {
                jQuery(itemR).find('br').replaceWith(' ');
            } catch (e) {

            }

            jQuery(itemR).find('li').append('&nbsp');
            jQuery(itemR).find(":hidden").remove();
            TextToTrans = jQuery(itemR).text();
            //console.log('text child trimeed');
        } else {
            var TextWithoutHidden = jQuery(elmentToOperate).clone().find(":hidden").remove().end().text().trim();
            if (TextWithoutHidden.length < 300 && TextWithoutHidden.length > 0) {
                TextToTrans = TextWithoutHidden;
                //console.log('hidden removed text');
            } else {
                if (TextToTrans.length == 0 && (MrAllowLongRequest || jQuery(elmentToOperate).text().trim().length < 300)) {
                var elmo=jQuery(elmentToOperate).clone();
                jQuery(elmo).find('script').remove();
                jQuery(elmo).find('style').remove();
                 jQuery(elmo).find('*').append('&nbsp');
                TextToTrans = jQuery(elmo).text().replace(/&nbsp/g,' ').replace(/undefined/g,'').trim();
                    //console.log('text gotten');
                } else {
                    //console.log("child content is too big");
                    return null;
                }
            }


        }
    }
    
    //console.log('filtered Text before edit:' + TextToTrans);
    TextToTrans = TextToTrans.replace(/([\s\r\n])+/g, " ");
    TextToTrans = TextToTrans.replace(/[\r\n]/g, " ");
    TextToTrans = TextToTrans.replace(/[\n]/g, " ");
    TextToTrans = TextToTrans.replace(/([\s\r\n])+/g, " ");
    TextToTrans = TextToTrans.replace(/\s+/g, " ");
    TextToTrans = TextToTrans.replace(/[_]/g, " ");
    TextToTrans = TextToTrans.replace('°', " ");
    TextToTrans = TextToTrans.replace(/["!@#$%^&*()°<:;>\-+=\t']/g, ' ');

    //console.log('filtered Text:' + TextToTrans);
    if (TextToTrans.trim().length == 0) {
        //console.log('no content to translate on this item');
        return null;
    } else {
        return TextToTrans;
    }
  

}

function MrTranslateTextInternal(TextToTrans)
{
                var SourceValue = Source;
                var SourceLabelVal = SourceLabel;

              if (MrUseRealtimeEngine==false) {
                jQuery("#mr_sign_player" + Id.toString()).attr('src', MRGetSignItemURL(TextToTrans, MRTooltipWidth, MRTooltipHeight, MRAVSpeed, Id, mrLang, SourceValue, Avatar, MrClientID, SourceLabelVal));
              } else {
                    //
                if(MrLastPlURL!=ItemURL){
                    jQuery("#mr_sign_player" + Id.toString()).attr('src', MRGetSignItemURL(TextToTrans, MRTooltipWidth, MRTooltipHeight, MRAVSpeed, Id, mrLang, SourceValue, Avatar, MrClientID, SourceLabelVal));
                    MrLastPlURL=ItemURL;
                }else{
                        document.getElementById(jQuery("#mr_sign_player999").attr('id')).contentWindow.postMessage("tr:"+TextToTrans, '*');
                }
                
              }

}

function MRAttachMoveEventsToPlugin()
{
    if (IsPluginInited==false) {
        return;
    }

          
    try {
        jQuery(".mr-tooltip").off('mouseover');
        jQuery(".mr-tooltip").off('mouseout');
    } catch (e) {
        console.log('off is not supported in this jquery version');
    }
    if (MrDisableHovering == false) {
      jQuery(".mr-img-transcripted").mouseover(function () {

        if (MRStop) {
          return;
        }
        if (!isin) {
          MRRequestTrnaslate(jQuery(this).attr('alt'));
          isin = true;
        }
      
      });

        jQuery(".mr-tooltip").mouseover(function () {

            if (MRStop) {
                return;
            }
              if (MrDelayHide) {
                if (MrHideTimer != undefined) {
                    clearTimeout(MrHideTimer);
                    
                }
            }
            if (!isin) {
                // jQuery(".mr-cont-tooltip-window").text(jQuery(this).text());
                //  //console.log('item on mouse ' + jQuery(this).text());
                var TextToTrans = MrGetTextFromElement(jQuery(this));
                if (TextToTrans==null || TextToTrans==undefined || TextToTrans.trim().length<=0) {
                    return;
                }
                    
                jQuery(".mr-cont-tooltip-window").fadeIn('slow', function () { });

                var NeedsReview = jQuery(this).attr('rev');
                var SourceValue = Source;
                var SourceLabelVal = SourceLabel;
                if (Source == undefined && NeedsReview == 'true') {
                    SourceValue = "rev-" + mrLang;
                    SourceLabelVal = true;
              }

            //   if (MrUseRealtimeEngine==false) {
            //     jQuery("#mr_sign_player" + Id.toString()).attr('src', MRGetSignItemURL(TextToTrans, MRTooltipWidth, MRTooltipHeight, MRAVSpeed, Id, mrLang, SourceValue, Avatar, MrClientID, SourceLabelVal));
            //   } else {
            //         //
            //     if(MrLastPlURL!=ItemURL){
            //         jQuery("#mr_sign_player" + Id.toString()).attr('src', MRGetSignItemURL(TextToTrans, MRTooltipWidth, MRTooltipHeight, MRAVSpeed, Id, mrLang, SourceValue, Avatar, MrClientID, SourceLabelVal));
            //         MrLastPlURL=ItemURL;
            //     }else{
            //             document.getElementById(jQuery("#mr_sign_player999").attr('id')).contentWindow.postMessage("tr:"+TextToTrans, '*');
            //     }
                
            //   }
               
                if (MrAllowLongRequest) {
                    if(TextToTrans.length>300)
                      {
                          var MrSentiWords=TextToTrans.split(/[., $!]/);
                          var ixInt=0;
                          var MrCurrentSent="";
                          MrQueuedSentinces=[];
                          for(var ix=0;ix<MrSentiWords.length;ix++)
                          {
                              if(ixInt>0)
                              {
                                    MrCurrentSent+=" ";
                              }
                            MrCurrentSent+=MrSentiWords[ix];
                              ixInt++;
                            if(ixInt==25){
                                MrQueuedSentinces.push(MrCurrentSent);
                                MrCurrentSent="";
                                ixInt=0;
                            }
                          
                          }
                          if (ixInt < 25) {
                              MrQueuedSentinces.push(MrCurrentSent);
                              MrCurrentSent = "";
                              ixInt = 0;

                          }
                        MrTranslateTextInternal(MrQueuedSentinces.shift());
                      }else{
                          MrQueuedSentinces=[];
                            MrTranslateTextInternal(TextToTrans);
                      }  

                } else {
                     MrTranslateTextInternal(TextToTrans);
                }
                //if (TextToTrans != LastTezt) {

                //    document.getElementById(jQuery("#mr_sign_player999").attr('id')).contentWindow.postMessage(jQuery(this).text(), '*')
                //    LastTezt = jQuery(this).text();
                //}

                if (DarkMode) {
                    jQuery(this).addClass('Darklite');
                } else {
                    jQuery(this).addClass('Highlite');
                }

            }
            isin = true;
        });

      jQuery(".mr-tooltip,.mr-img-transcripted").mouseout(function () {
        if (MrUseRealtimeEngine == false && MrHideAfterDone==true) {

            if (MrDelayHide) {
                if (MrHideTimer != undefined) {
                    clearTimeout(MrHideTimer);
                }

                MrHideTimer = setTimeout(function () {
                    jQuery(".mr-cont-tooltip-window").hide();

                }, 200);
            } else {
                jQuery(".mr-cont-tooltip-window").hide();
            }
         
        }
            if (DarkMode) {
                jQuery(this).removeClass('Darklite');
            } else {
                jQuery(this).removeClass('Highlite');
            }
            isin = false;
        });
    }
    IsFirst = false;
}

function MRTranslatorPrepareCSS(css) {
    MRTranslatorCSS = css;
}

function MRAddCSS(MRselector) {
    jQuery(MRselector).append("<style>" + MRTranslatorCSS + "</style>");
}
function GenerateReviewId() {
    var i = 0;
    jQuery('.mr-tooltip').each(function () {
        if (jQuery(this).attr('mr-tr-no') == undefined ) {
            jQuery(this).attr('mr-tr-no', i++);
        }

    });
}
function MrReviewSite()
{
    // var RelURL = window.location.toString().slice(window.location.href.indexOf(window.location.host) + (window.location.host.length), window.location.href.length);
    // $.get('https://mindrocketsinc.com/api/FetchReview.aspx?MrClientID=' + MrClientID.toString() + "&Lang=" + (mrLang.toLowerCase().trim() == 'ar' ? 'true' : 'false') + "&RelativeUrl="+encodeURI(RelURL), null, function (resp) {
    //     var re = JSON.parse(resp);
    //     if (re.results.toLowerCase()=="ok") {
           
    //         for (var i = 0; i < re.data.length; i++) {
    //             try {
                    
    //                 jQuery(re.data[i].Selector).attr('rev', true);
    //             } catch (e) {
    //                 console.log('error loading the item to review service');
    //             }
              
    //         }

    //     }
    // });
}

function MrSelTranslate(SelItem) {
    var Body = $(SelItem).parents().find('body');
    $(Body).find("#selView>#cont").empty();
    var clo = $(SelItem).clone();

    clo.attr('size', '15');
    clo.attr('id', 'cloned-select');
    clo.attr('style', '    width: 84%;    margin-left: 8%;    margin-right: 8%;    margin-bottom: 8%;');
    $(Body).find("#selView>#cont").append(clo);
    clo.attr('onclick', '');
    $(clo).change(function () {
        $(SelItem).val($(clo).val());
        $(Body).find("#backShade").hide();
    });
    $(Body).find("#selView>#cont").append(clo);
    $(Body).find("#backShade").show();
    $(Body).find("#backShade").click(function (e) { $(this).hide(); });
    (clo).find('option').addClass('mr-tooltip');
    MRAttachMoveEventsToPlugin();
    clo.focus();

}
function prepareSel() {

    var Body = $('body');
    $(Body).append('<div id="backShade"><div id="selView"></div></div>');

    //$(Body).append("<div id='selView'></div>");

    $(Body).find("#selView").append('<div class="TitleBar"  style="display: block;    height: 17px;    padding: 10px;"><div id="" style="    float: left;"></div><div id="MenCloseBtn" style="    float: right;    margin-right: 4px;    margin-top: 4px;    margin-bottom: 4px;cursor: pointer;"><img src="https://mindrocketsinc.com/api/imgs/closebtn.png" width="14" /></div></div>');
    $(Body).find("#selView").append("<div id='cont'>content</div>");
    $(Body).append("<style>select#cloned-select,select#cloned-select:focus {    border: 1px solid #8e8d8d;    outline: none;} #cloned-select>option {    padding-left: 14px;    padding-top: 5.5px;    padding-bottom: 5.5px;} #selView{     display: block;    position: fixed;    top: 50%;    left: 50%;    width: 35%;    height: auto;    min-height: 151px;    background: rgb(230, 236, 240);    transform: translate(-50%,-50%);      color: black;}</style>");
    $(Body).append("<style>#backShade{position: fixed;    top: 0;    left: 0;    width: 100%;    height: 100%;    min-height: 200px;    background: #464646d1;  }</style>");
    $(Body).find("#backShade").hide();
    MrCreateAllDrops();
    
    $(Body).find("#MenCloseBtn").click(function () {
        $(Body).find("#backShade").hide();

    });


}
function MrCreateAllDrops()
{
    var Body = $('body');
    $(Body).find("select").each(function () {



        if ($(this).attr('onclick') == undefined) {
            (this).onclick = function () {
                if (IsPluginInited && MRStop == false) {
                    MrSelTranslate($(this));
                }
            };//('onclick','parent.');

        } else {

        }
    });
}

