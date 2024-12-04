jQuery(document).ready(function($){$(document).on('click','.wcl-filter-sidebar .woocommerce-widget-layered-nav .widget-title',function(){var parent=$(this).closest('.woocommerce-widget-layered-nav');parent.toggleClass('filter-active');var list=parent.find('.woocommerce-widget-layered-nav-list');list.fadeToggle()})
$('.qs-select').select2();jQuery('.btn-ld-submit').on('click',function(){var href=jQuery(this).attr('href');jQuery('input[name=product]').val(href);jQuery('#btn-pp').trigger("click");return!1});jQuery('.button-g-2024').on('click',function(){const title=$(this).data('product-title');const price=$(this).data('product-price');$('input[name=product]').val(title);$('input[name=price]').val(price);$('.form-product-title').html(title)});function openSheet(){const $=document.querySelector.bind(document)
const openSheetButton=$(".open-sheet")
const sheet=$("#sheet")
const sheetContents=sheet.querySelector(".contents")
const draggableArea=sheet.querySelector(".draggable-area")
let sheetHeight
const setSheetHeight=(value)=>{sheetHeight=Math.max(0,Math.min(100,value))
sheetContents.style.height=`${sheetHeight}vh`
if(sheetHeight===100){sheetContents.classList.add("fullscreen")}else{sheetContents.classList.remove("fullscreen")}}
const setIsSheetShown=(value)=>{sheet.setAttribute("aria-hidden",String(!value))}
jQuery(".open-sheet").click(function(){setSheetHeight(Math.min(55,720/window.innerHeight*100))
setIsSheetShown(!0)});sheet.querySelector(".close-sheet").addEventListener("click",()=>{setIsSheetShown(!1)})
sheet.querySelector(".sheet-overlay").addEventListener("click",()=>{setIsSheetShown(!1)})
const touchPosition=(event)=>event.touches?event.touches[0]:event
let dragPosition
const onDragStart=(event)=>{dragPosition=touchPosition(event).pageY
sheetContents.classList.add("not-selectable")
draggableArea.style.cursor=document.body.style.cursor="grabbing"}
const onDragMove=(event)=>{if(dragPosition===undefined)return
const y=touchPosition(event).pageY
const deltaY=dragPosition-y
const deltaHeight=deltaY/window.innerHeight*100
setSheetHeight(sheetHeight+deltaHeight)
dragPosition=y}
const onDragEnd=()=>{dragPosition=undefined
sheetContents.classList.remove("not-selectable")
draggableArea.style.cursor=document.body.style.cursor=""
if(sheetHeight<25){setIsSheetShown(!1)}else if(sheetHeight>75){setSheetHeight(100)}else{setSheetHeight(55)}}
draggableArea.addEventListener("mousedown",onDragStart)
draggableArea.addEventListener("touchstart",onDragStart)
window.addEventListener("mousemove",onDragMove)
window.addEventListener("touchmove",onDragMove)
window.addEventListener("mouseup",onDragEnd)
window.addEventListener("touchend",onDragEnd)}
jQuery(document).ready(function($){});$.loadMagnificPopup().then(function(){$('.gnew').each(function(){$(this).magnificPopup({delegate:'a',type:'image',mainClass:'g-hop-qua',gallery:{enabled:!0,arrowMarkup:'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"><i class="icon-angle-%dir%"></i></button>',}})})})})
;