!function(e){var t={};function n(i){if(t[i])return t[i].exports;var a=t[i]={i:i,l:!1,exports:{}};return e[i].call(a.exports,a,a.exports,n),a.l=!0,a.exports}n.m=e,n.c=t,n.d=function(e,t,i){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(n.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var a in e)n.d(i,a,function(t){return e[t]}.bind(null,a));return i},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=61)}({61:function(e,t,n){e.exports=n(62)},62:function(e,t,n){n(63);var i=n(64).LevelsTable;$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),$("#btnhorario").on("click",(function(){$("#createschedule").modal("show")})),$("#btncreatelevel").on("click",(function(){$("#newlevel").modal("show")})),$("#checklevelactivo").on("change",(function(){$(this).val(1),this.checked||$(this).val(0),i({activo:$(this).val()})}));i({activo:$("#checklevelactivo").val()})},63:function(e,t){$("#scheduleinicio").timepicker({timeFormat:"h:mm p",startTime:"10:00",interval:30,dynamic:!1,dropdown:!0,scrollbar:!1}),$("#scheduleinicio").on("click",(function(){$(".ui-timepicker-container").css("z-index",9999)})),$("#schedulefin").timepicker({timeFormat:"h:mm p",startTime:"10:00",interval:30,dynamic:!1,dropdown:!0,scrollbar:!1}),$("#schedulefin").on("click",(function(){$(".ui-timepicker-container").css("z-index",9999)})),$("#finicio").datetimepicker({timepicker:!1,format:"Y-m-d",onShow:function(e){this.setOptions({maxDate:!!jQuery("#ffin").val()&&jQuery("#ffin").val()})},lang:"es"}),$("#ffin").datetimepicker({timepicker:!1,format:"Y-m-d",onShow:function(e){this.setOptions({minDate:!!jQuery("#finicio").val()&&jQuery("#finicio").val()})},lang:"es"})},64:function(e,t){e.exports={LevelsTable:function(e){var t=screen.height-520;return $("#levelstable").DataTable({scrollY:t,destroy:!0,scrollCollapse:!0,processing:!0,responsive:!0,ajax:{url:"/levels/datatable",type:"POST",data:e},columns:[{data:"id",className:"w-10"},{data:"nombre",className:"w-20"},{data:"level_schedule.schedule",className:"w-20"},{data:"finicio",className:"w-20"},{data:"ffin",className:"w-20"},{data:null,searcheable:!1,className:"w-10",render:function(e){var t=e.costo;return new Intl.NumberFormat("es-MX",{style:"currency",currency:"MXN"}).format(t)}},{data:"costo",visible:!1}],language:{url:"/languaje/es.json"},lengthMenu:[[10,25,50,-1],[10,25,50,"Todos"]]})}}}});