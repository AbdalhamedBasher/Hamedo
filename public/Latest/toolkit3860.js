String.prototype.MRformat = function () {
    var formatted = this;
    for (var i = 0; i < arguments.length; i++) {
        var regexp = new RegExp('\\{' + i + '\\}', 'gi');
        formatted = formatted.replace(regexp, arguments[i]);
    }
    return formatted;
};



function MRdragElement(DivSelector, TitleCSS) {
    var BackColor='white'
    if (typeof MrBackColor !== 'undefined') {
        // the variable is defined
        BackColor = MrBackColor;

  }
  
    if (TitleCSS==undefined) {
        TitleCSS = 'cursor:move;display: block;width: 100%;text-align: center;background-color: ' + BackColor + ';height: 30px;padding-bottom:3%;padding-top: 3%;';
    }
    jQuery(DivSelector).prepend('<div id="divMover"></div>');
    var MoverDiv = jQuery(DivSelector).find("#divMover");
    jQuery(MoverDiv).attr('style', TitleCSS);
    var PosX = undefined;
    var PosY = undefined;
    var IsInMove = false;
    var OffsetX = undefined;
    var OffsetY = undefined;
    
    function SetWindowPos(PosX, PosY)
    {
        jQuery(MoverDiv).parent().css('top', PosY + 'px');
        jQuery(MoverDiv).parent().css('left', PosX + 'px');   
  }

  var MouseMoveFunc = function (e) {
    e.preventDefault();
    PosX = (e.clientX);
    PosY = (e.clientY);
    if (IsInMove) {
      SetWindowPos(PosX, PosY);
    }
  };
  var MouseDownFunc = function (e) {
    e.preventDefault();

    IsInMove = true;
  };
  var MouseUpFunc = function (e) {
    e.preventDefault();
    if (IsInMove) {
      IsInMove = false;
      SetWindowPos(e.clientX, e.clientY);
    }
  };
  //debugger;
  jQuery(MoverDiv)[0].addEventListener('touchstart', MouseDownFunc);
  jQuery(MoverDiv)[0].addEventListener('touchmove', MouseMoveFunc);
  jQuery(MoverDiv)[0].addEventListener('touchend', MouseUpFunc);

  jQuery(MoverDiv)[0].addEventListener('pointerdown', MouseDownFunc);
  jQuery(MoverDiv)[0].addEventListener('pointermove', MouseMoveFunc);
  jQuery(MoverDiv)[0].addEventListener('pointerup', MouseUpFunc);
  jQuery(document).mousemove(MouseMoveFunc);
  jQuery(MoverDiv).mousedown(MouseDownFunc);
  jQuery(MoverDiv).mouseup(MouseUpFunc);
  jQuery(document).mouseup(MouseUpFunc);
}
MrChangeNeededArray = [];
function MrClearReplaceKey(mrKey) {
  MrChangeNeededArray[mrKey] = undefined;
}
function MrReplaceIfNeeded(mrKey, mrStr, mrValue, mrNewValue)
{
  if (MrChangeNeededArray[mrKey] == undefined || ( MrChangeNeededArray[mrKey] == true)) {
    if (mrStr.toString().toLowerCase().indexOf(mrValue.toLowerCase())>-1) {
      var rg = new RegExp(mrValue, "g");
      MrChangeNeededArray[mrKey] = false;
      return mrStr.replace(rg, mrNewValue);
    } else {
      return mrStr;
    }
  } else {
    return mrStr;
  }
}
function HandleChildren(item,CSSClass) {
    var Kids = jQuery(item).children();
    if (jQuery(Kids).length > 0) {
        jQuery(Kids).each(function () {
            HandleChildren(jQuery(this),CSSClass);

        });
    }

    if (getTextOnly(jQuery(item)).length > 0) {
        jQuery(item).addClass(CSSClass);

    } else {
        if (jQuery(item).attr('mr-text-go') != undefined && jQuery(item).attr('mr-text-go').length > 0) {
            jQuery(item).addClass(CSSClass);
        } else {
            jQuery(item).removeClass(CSSClass);
        }
       
    }
}

//function getTextOnly(itemSelect) {
//    return jQuery(itemSelect).clone()   //clone the element
//          .children() //select all the children
//          .remove()   //remove all the children
//          .end()  //again go back to selected element
//          .text();
//}
function getTextOnly(itemSelect) {
    var u = jQuery(itemSelect).clone();
    
  try {
   
    jQuery(u).find('br').replaceWith(' ');
  } catch (e) {

  }
  try {
    jQuery(u).remove('script');
    jQuery(u).remove('style');
    
    jQuery(u).find('.mr-tooltip-ignore').remove();
  } catch (e) {
    //  console.log('elm not exist');
  }
    jQuery(u).find('li').append('&nbsp');
    jQuery(u).find(":hidden").remove();

    return jQuery(u).children() //select all the children
              .remove()   //remove all the children
              .end()  //again go back to selected element
              .text();

}

function GetParam(pname) {
  if (typeof (localStorage) != "undefined") {
    return localStorage.getItem(pname);
  } else {
    if (jQuery.cookie == undefined) {
      if (typeof (Cookies) != "undefined") {
        return Cookies.get(pname);
      } else {
        return "";
      }
    } else {
      return jQuery.cookie(pname);
    }
  }
}

function SetParam(pname, pval) {
  if (typeof (localStorage) != "undefined") {
    localStorage.setItem(pname, pval);
  } else {
    if (jQuery.cookie == undefined) {
      if (typeof (Cookies) != "undefined") {
        Cookies.set(pname, pval, { path: '/' });
      } else {
        console.log('no setter found');
      }


    } else {
      jQuery.cookie(pname, pval, { path: '/' });
    }
  }
}
function getPageRelativePath() {
    var loc = (location.href.replace(/(.+\w\/)(.+)/, "/$2"));
    if (loc == location.href)
        loc = "/";
    return loc;
}
function SplitSentinces(sentince, step)
{
    var data = [];
    var sp = sentince.toString().split(' ');
    var st = "";
    var count = 0;
    if (step==undefined ||step==null) {
        step = 10;
    }
    
    for (var i = 0; i < sp.length; i++) {
        if (count < step) {
            count++;
            st += sp[i] + ' ';
        } else {
            count = 0;
            data.push(st);
            st = "";
        }
    }
    if (count > 0) {
        data.push(st);
        st = "";
    }
    return data;
}
String.prototype.InsertAt = function (CharToInsert, Position) {
    return (this!=undefined && typeof this.valueOf() === "string")? this.slice(0, Position) + CharToInsert + this.slice(Position):undefined;
}
function SplitLongElements(CSSClassName, commonSelectors, IgnoredChild, ApplyOnClass) {
    if (ApplyOnClass == undefined) {
        ApplyOnClass = "." + CSSClassName;
    }
    jQuery(commonSelectors).addClass(CSSClassName);
    jQuery(ApplyOnClass).each(function () {
        var PeaceLength = 250;
        if (jQuery(this).text().length > PeaceLength && (jQuery(this).find('.MrMUI-tab-container').length<=0) && ( jQuery(this).hasClass('mr-tooltip-skip')==false)) {
         var scriptsElements=jQuery(this).find('script').detach();
             jQuery('body').append(scriptsElements);
            if (jQuery(this).children().length <= 0 || (jQuery(this).children().length == jQuery(this).find(IgnoredChild).length)) {
                var childs = {};
                var no = 0;
                var prefex = "MRCK"

                // jQuery(this).html("<k>" + jQuery(this).html() + "</k>");
                var htm = jQuery(this).html().toString();
                jQuery(this).children().each(function () {
                    var key = prefex + no.toString();
                    childs[key] = jQuery(this).prop('outerHTML');
                    //  //console.log('tagname:' + jQuery(this).prop('tagName'));
                    no++;
                    htm = htm.replace(childs[key], key);
                    // //console.log('key=' + key + " val=" + childs[key]);
                });

                htm = "<k>" + htm;
                var Space = htm.indexOf(' ', PeaceLength);
                while (Space > -1) {
                    htm = htm.toString().InsertAt("</k><k>", Space);
                    if (Space + PeaceLength < htm.length) {
                        Space = htm.indexOf(' ', Space + PeaceLength);

                    } else {
                        Space = -1;
                    }

                }
                for (var key in childs) {
                    htm = htm.replace(key, childs[key]);
                }
                htm = htm + "</k>";
                jQuery(this).html(htm);
                jQuery(this).removeClass(CSSClassName);
                jQuery(this).find('k').addClass(CSSClassName);
            } else {
                jQuery(this).removeClass(CSSClassName);
            }

        }
    });
}

function MRgetIEVersion() {
    var agent = navigator.userAgent;
    var reg = /MSIE\s?(\d+)(?:\.(\d+))?/i;
    var matches = agent.match(reg);
    if (matches != null) {
        return { major: matches[1], minor: matches[2] };
    }
    return { major: "-1", minor: "-1" };
}

function MRdetectIE() {
    var ua = window.navigator.userAgent;
    var ie = ua.search(/(MSIE|Trident|Edge)/);

    return ie > -1;
}
function SplitLongElementInElemet(CSSClassName, IgnoredChild, ApplyOnClass) {
    if (ApplyOnClass == undefined) {
        ApplyOnClass = "." + CSSClassName;
    }
   // jQuery(commonSelectors).addClass(CSSClassName);
    jQuery(ApplyOnClass).each(function () {
        var PeaceLength = 250;
        if (jQuery(this).text().length > PeaceLength && (jQuery(this).find('.MrMUI-tab-container').length<=0) && ( jQuery(this).hasClass('mr-tooltip-skip')==false)) {
            if (jQuery(this).children().length <= 0 || (jQuery(this).children().length <= jQuery(this).find(IgnoredChild).length)) {
                var childs = {};
                var no = 0;
                var prefex = "MRCK"

                // jQuery(this).html("<k>" + jQuery(this).html() + "</k>");
                var htm = jQuery(this).html().toString();
                jQuery(this).children().each(function () {
                    var key = prefex + no.toString();
                    childs[key] = jQuery(this).prop('outerHTML');
                    //  //console.log('tagname:' + jQuery(this).prop('tagName'));
                    no++;
                    htm = htm.replace(childs[key], key);
                    // //console.log('key=' + key + " val=" + childs[key]);
                });

                htm = "<k>" + htm;
                var Space = htm.indexOf(' ', PeaceLength);
                while (Space > -1) {
                    htm = htm.toString().InsertAt("</k><k>", Space);
                    if (Space + PeaceLength < htm.length) {
                        Space = htm.indexOf(' ', Space + PeaceLength);

                    } else {
                        Space = -1;
                    }

                }
                for (var key in childs) {
                    htm = htm.replace(key, childs[key]);
                }
                htm = htm + "</k>";
                jQuery(this).html(htm);
                jQuery(this).removeClass(CSSClassName);
                jQuery(this).find('k').addClass(CSSClassName);
            } else {
                // jQuery(this).removeClass(CSSClassName);
              //  //console.log('this is the problematic case');
            }

        }
    });
}


function SplitLong(Selector, PeaceLength) {
    if (PeaceLength==undefined) {
        PeaceLength = 240;
    }
    var prefex = "MRCK"
    var no = 0;
    jQuery(Selector).each(function () {
        if (jQuery(this).text().length > PeaceLength && (jQuery(this).find('.MrMUI-tab-container').length<=0) && ( jQuery(this).hasClass('mr-tooltip-skip')==false)) {


            var childs = {};
            var htm = jQuery(this).html().toString();
            jQuery(this).children().each(function () {

                var outerHTMLItem = this.outerHTML;
                var key = prefex + no.toString();
                childs[key] = jQuery(this).prop('outerHTML');
                //  //console.log('tagname:' + jQuery(this).prop('tagName'));
                no++;
                htm = htm.replace(childs[key], key);


                // //console.log('key=' + key + " val=" + childs[key]);
            });

            var Space = htm.indexOf(' ', PeaceLength);
            while (Space > -1) {
                htm = htm.toString().InsertAt("</k><k>", Space);
                if (Space + PeaceLength < htm.length) {
                    Space = htm.indexOf(' ', Space + PeaceLength);

                } else {
                    Space = -1;
                }

            }
            for (var key in childs) {
                htm = htm.replace(key, childs[key]);
            }
            htm = "<k>" + htm + "</k>";
            jQuery(this).html(htm);
            var Text = getTextOnly(jQuery(this));
        }
    });

}
function warpTextComponent(selector,elementOpener,elementCloser)
{
    try {

   
    if (elementOpener==undefined) {
        elementOpener = "<k>";
    }
    if (elementCloser==undefined) {
        elementCloser = "</k>";
    }
    var KeysItem = {};
    var itemNo = 0;
    var prefKeyp = "MRTXC";
    jQuery(selector).contents().filter(function () {
        return this.nodeType == 3
    }).each(function () {
      //  //console.log("item value=" + this.textContent);
        var MadeKeyP = prefKeyp + '_' + itemNo.toString();
        KeysItem[MadeKeyP] = this.textContent;
        itemNo++;
        this.textContent = MadeKeyP;
    });
    var DivHTM = jQuery(selector).html().toString();
    for (var key in KeysItem) {
        ////console.log("item key is " + key);
        DivHTM = DivHTM.replace(key,elementOpener+ KeysItem[key]+elementCloser);
    }
    jQuery(selector).html(DivHTM);
    } catch (e) {

    }
}