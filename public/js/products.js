/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/products.js":
/*!**********************************!*\
  !*** ./resources/js/products.js ***!
  \**********************************/
/***/ (() => {

eval("$(document).ready(function () {\n  $('#collapse-cat-button').click(function () {\n    $('#cat-menu-collapse').toggleClass(\"d-none\");\n  });\n  $('#close-cat-menu').click(function () {\n    $('#cat-menu-collapse').toggleClass(\"d-none\");\n  });\n  $('#cart').click(function () {\n    $('#cart-body').toggleClass(\"d-none\");\n  });\n  $('#cart-inner').click(function () {\n    $('#cart-body').toggleClass(\"d-none\");\n  });\n  $('.cart-products-container .cart-product').each(function (index, element) {\n    $(element).unbind(\"click\");\n    $(element).find('.remove-cart-product').click(function (e) {\n      $(e.target).closest(\".cart-product\").remove();\n      console.log($(e.target));\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcHJvZHVjdHMuanM/YWZlMiJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsImNsaWNrIiwidG9nZ2xlQ2xhc3MiLCJlYWNoIiwiaW5kZXgiLCJlbGVtZW50IiwidW5iaW5kIiwiZmluZCIsImUiLCJ0YXJnZXQiLCJjbG9zZXN0IiwicmVtb3ZlIiwiY29uc29sZSIsImxvZyJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBTTtBQUdwQkYsRUFBQUEsQ0FBQyxDQUFDLHNCQUFELENBQUQsQ0FBMEJHLEtBQTFCLENBQWdDLFlBQU07QUFDbENILElBQUFBLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCSSxXQUF4QixDQUFvQyxRQUFwQztBQUNILEdBRkQ7QUFJQUosRUFBQUEsQ0FBQyxDQUFDLGlCQUFELENBQUQsQ0FBcUJHLEtBQXJCLENBQTJCLFlBQU07QUFDN0JILElBQUFBLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCSSxXQUF4QixDQUFvQyxRQUFwQztBQUNILEdBRkQ7QUFJQUosRUFBQUEsQ0FBQyxDQUFDLE9BQUQsQ0FBRCxDQUFXRyxLQUFYLENBQWlCLFlBQU07QUFDbkJILElBQUFBLENBQUMsQ0FBQyxZQUFELENBQUQsQ0FBZ0JJLFdBQWhCLENBQTRCLFFBQTVCO0FBQ0gsR0FGRDtBQUlBSixFQUFBQSxDQUFDLENBQUMsYUFBRCxDQUFELENBQWlCRyxLQUFqQixDQUF1QixZQUFNO0FBQ3pCSCxJQUFBQSxDQUFDLENBQUMsWUFBRCxDQUFELENBQWdCSSxXQUFoQixDQUE0QixRQUE1QjtBQUNILEdBRkQ7QUFNQUosRUFBQUEsQ0FBQyxDQUFDLHdDQUFELENBQUQsQ0FBNENLLElBQTVDLENBQWlELFVBQUNDLEtBQUQsRUFBUUMsT0FBUixFQUFvQjtBQUNqRVAsSUFBQUEsQ0FBQyxDQUFDTyxPQUFELENBQUQsQ0FBV0MsTUFBWCxDQUFrQixPQUFsQjtBQUVBUixJQUFBQSxDQUFDLENBQUNPLE9BQUQsQ0FBRCxDQUFXRSxJQUFYLENBQWdCLHNCQUFoQixFQUF3Q04sS0FBeEMsQ0FBOEMsVUFBQ08sQ0FBRCxFQUFPO0FBQ2pEVixNQUFBQSxDQUFDLENBQUNVLENBQUMsQ0FBQ0MsTUFBSCxDQUFELENBQVlDLE9BQVosQ0FBb0IsZUFBcEIsRUFBcUNDLE1BQXJDO0FBQ0FDLE1BQUFBLE9BQU8sQ0FBQ0MsR0FBUixDQUFZZixDQUFDLENBQUNVLENBQUMsQ0FBQ0MsTUFBSCxDQUFiO0FBQ0gsS0FIRDtBQUtILEdBUkQ7QUFXSCxDQWhDRCIsInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KCgpID0+IHtcclxuXHJcblxyXG4gICAgJCgnI2NvbGxhcHNlLWNhdC1idXR0b24nKS5jbGljaygoKSA9PiB7XHJcbiAgICAgICAgJCgnI2NhdC1tZW51LWNvbGxhcHNlJykudG9nZ2xlQ2xhc3MoXCJkLW5vbmVcIilcclxuICAgIH0pXHJcblxyXG4gICAgJCgnI2Nsb3NlLWNhdC1tZW51JykuY2xpY2soKCkgPT4ge1xyXG4gICAgICAgICQoJyNjYXQtbWVudS1jb2xsYXBzZScpLnRvZ2dsZUNsYXNzKFwiZC1ub25lXCIpXHJcbiAgICB9KVxyXG5cclxuICAgICQoJyNjYXJ0JykuY2xpY2soKCkgPT4ge1xyXG4gICAgICAgICQoJyNjYXJ0LWJvZHknKS50b2dnbGVDbGFzcyhcImQtbm9uZVwiKVxyXG4gICAgfSlcclxuXHJcbiAgICAkKCcjY2FydC1pbm5lcicpLmNsaWNrKCgpID0+IHtcclxuICAgICAgICAkKCcjY2FydC1ib2R5JykudG9nZ2xlQ2xhc3MoXCJkLW5vbmVcIilcclxuICAgIH0pXHJcblxyXG5cclxuXHJcbiAgICAkKCcuY2FydC1wcm9kdWN0cy1jb250YWluZXIgLmNhcnQtcHJvZHVjdCcpLmVhY2goKGluZGV4LCBlbGVtZW50KSA9PiB7XHJcbiAgICAgICAgJChlbGVtZW50KS51bmJpbmQoXCJjbGlja1wiKVxyXG5cclxuICAgICAgICAkKGVsZW1lbnQpLmZpbmQoJy5yZW1vdmUtY2FydC1wcm9kdWN0JykuY2xpY2soKGUpID0+IHtcclxuICAgICAgICAgICAgJChlLnRhcmdldCkuY2xvc2VzdChcIi5jYXJ0LXByb2R1Y3RcIikucmVtb3ZlKClcclxuICAgICAgICAgICAgY29uc29sZS5sb2coJChlLnRhcmdldCkpXHJcbiAgICAgICAgfSlcclxuXHJcbiAgICB9KVxyXG5cclxuXHJcbn0pIl0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9wcm9kdWN0cy5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/products.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/products.js"]();
/******/ 	
/******/ })()
;