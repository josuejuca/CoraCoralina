appear=(function(){'use strict';var scrollLastPos=null,scrollTimer=0,scroll={};function track(){var newPos=window.scrollY||window.pageYOffset;if(scrollLastPos!=null){scroll.velocity=newPos-scrollLastPos;scroll.delta=(scroll.velocity>=0)?scroll.velocity:(-1*scroll.velocity);}
scrollLastPos=newPos;if(scrollTimer){clearTimeout(scrollTimer);}
scrollTimer=setTimeout(function(){scrollLastPos=null;},30);}
addEventListener('scroll',track,false);function viewable(el,bounds){var rect=el.getBoundingClientRect();return((rect.top+rect.height)>=0&&(rect.left+rect.width)>=0&&(rect.bottom-rect.height)<=((window.innerHeight||document.documentElement.clientHeight)+bounds)&&(rect.right-rect.width)<=((window.innerWidth||document.documentElement.clientWidth)+bounds));}
return function(obj){return(function(obj){var initd=false,elements=[],elementsLength,reappear=[],appeared=0,disappeared=0,timer,deltaSet,opts={},done;function debounce(fn,delay){return function(){var self=this,args=arguments;clearTimeout(timer);timer=setTimeout(function(){fn.apply(self,args);},delay);};}
function checkAppear(){if(scroll.delta<opts.delta.speed){if(!deltaSet){deltaSet=true;doCheckAppear();setTimeout(function(){deltaSet=false;},opts.delta.timeout);}}
(debounce(function(){doCheckAppear();},opts.debounce)());}
function begin(){doCheckAppear();addEventListener('scroll',checkAppear,false);addEventListener('resize',checkAppear,false);}
function end(){elements=[];if(timer){clearTimeout(timer);}
removeListeners();}
function removeListeners(){removeEventListener('scroll',checkAppear,false);removeEventListener('resize',checkAppear,false);}
function doCheckAppear(){if(done){return;}
elements.forEach(function(n,i){if(n&&viewable(n,opts.bounds)){if(reappear[i]){reappear[i]=false;appeared++;if(opts.appear){opts.appear(n);}
if(!opts.disappear&&!opts.reappear){elements[i]=null;}}}else{if(reappear[i]===false){if(opts.disappear){opts.disappear(n);}
disappeared++;if(!opts.reappear){elements[i]=null;}}
reappear[i]=true;}});if(!opts.reappear&&(!opts.appear||opts.appear&&appeared===elementsLength)&&(!opts.disappear||opts.disappear&&disappeared===elementsLength)){done=true;removeListeners();if(opts.done){opts.done();}}}
function init(){if(initd){return;}
initd=true;if(opts.init){opts.init();}
var els;if(typeof opts.elements==='function'){els=opts.elements();}else{els=opts.elements;}
if(els){elementsLength=els.length;for(var i=0;i<elementsLength;i+=1){elements.push(els[i]);reappear.push(true);}
begin();}}
return function(obj){obj=obj||{};opts={init:obj.init,elements:obj.elements,appear:obj.appear,disappear:obj.disappear,done:obj.done,reappear:obj.reappear,bounds:obj.bounds||0,debounce:obj.debounce||50,delta:{speed:obj.deltaSpeed||50,timeout:obj.deltaTimeout||500}};addEventListener('DOMContentLoaded',init,false);var isIE10=false;if(Function('/*@cc_on return document.documentMode===10@*/')()){isIE10=true;}
var completeOrLoaded=document.readyState==='complete'||document.readyState==='loaded';if(isIE10){if(completeOrLoaded){init();}}else{if(completeOrLoaded||document.readyState==='interactive'){init();}}
return{trigger:function trigger(){doCheckAppear();},pause:function pause(){removeListeners();},resume:function resume(){begin();},destroy:function destroy(){end();}};};}()(obj));};}());