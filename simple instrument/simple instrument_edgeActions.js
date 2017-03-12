/***********************
* Adobe Edge Animate Composition Actions
*
* Edit this file with caution, being careful to preserve 
* function signatures and comments starting with 'Edge' to maintain the 
* ability to interact with these actions from within Adobe Edge Animate
*
***********************/
(function($, Edge, compId){
var Composition = Edge.Composition, Symbol = Edge.Symbol; // aliases for commonly used Edge classes

   //Edge symbol: 'stage'
   (function(symbolName) {
      
      
      Symbol.bindElementAction(compId, symbolName, "${_c_key}", "click", function(sym, e) {
         var playc = sym.getSymbol("c_key");
         playc.play("press");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_d_key}", "click", function(sym, e) {
         // Use this to target events and elements inside a symbol.
         // For example:
         // var mySymbolObject = sym.getSymbol("Symbol2");
         // mySymbolObject.play(); will play the timeline of Symbol2. Another example:
         // mySymbolObject.$("myElement").hide(); will hide "myElement" inside of Symbol2.
         var playd = sym.getSymbol("d_key");
         playd.play("press");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_e_key}", "click", function(sym, e) {
         var playe = sym.getSymbol("e_key");
         playe.play("press");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_f_key}", "click", function(sym, e) {
         var playf = sym.getSymbol("f_key");
         playf.play("press");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_g_key}", "click", function(sym, e) {
         var playg = sym.getSymbol("g_key");
         playg.play("press");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_a_key}", "click", function(sym, e) {
         var playa = sym.getSymbol("a_key");
         playa.play("press");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_b_key}", "click", function(sym, e) {
         var playb = sym.getSymbol("b_key");
         playb.play("press");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_bsharp_key}", "click", function(sym, e) {
         var playbsharp = sym.getSymbol("bsharp_key")
         playbsharp.play("press");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_asharp_key}", "click", function(sym, e) {
         var playasharp = sym.getSymbol("asharp_key")
         playasharp.play("press");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_esharp_key}", "click", function(sym, e) {
         var playesharp = sym.getSymbol("esharp_key")
         playesharp.play("press");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_dsharp_key}", "click", function(sym, e) {
         var playdsharp = sym.getSymbol("dsharp_key")
         playdsharp.play("press");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_gsharp_key}", "click", function(sym, e) {
         var playgsharp = sym.getSymbol("gsharp_key")
         playgsharp.play("press");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "document", "compositionReady", function(sym, e) {
         $(document).keydown(function(e)
         {
           switch( e.keyCode)
           {
             case 65: // a
               sym.getSymbol('c_key').play("press");
               break;
             case 83: // s
               sym.getSymbol('d_key').play("press");
               break;
             case 68: // d
               sym.getSymbol('e_key').play("press");
               break;
             case 70: // f
               sym.getSymbol('f_key').play("press");
               break;
             case 71: // g
               sym.getSymbol('g_key').play("press");
               break;
             case 72: // h
               sym.getSymbol('a_key').play("press");
               break;
             case 74: // j
               sym.getSymbol('b_key').play("press");
               break;
             case 87: // w
               sym.getSymbol('dsharp_key').play("press");
               break;
             case 69: // e
               sym.getSymbol('esharp_key').play("press");
               break;
             case 84: // t
               sym.getSymbol('gsharp_key').play("press");
               break;
             case 89: // y
               sym.getSymbol('asharp_key').play("press");
               break;
             case 85: // u
               sym.getSymbol('bsharp_key').play("press");
               break;
         	 }
         });

      });
      //Edge binding end

   })("stage");
   //Edge symbol end:'stage'

   //=========================================================
   
   //Edge symbol: 'b_key'
   (function(symbolName) {   
   
   })("b_key");
   //Edge symbol end:'b_key'

   //=========================================================
   
   //Edge symbol: 'c_key'
   (function(symbolName) {   
   
   })("c_key");
   //Edge symbol end:'c_key'

   //=========================================================
   
   //Edge symbol: 'd_key'
   (function(symbolName) {   
   
   })("d_key");
   //Edge symbol end:'d_key'

   //=========================================================
   
   //Edge symbol: 'e_key'
   (function(symbolName) {   
   
   })("e_key");
   //Edge symbol end:'e_key'

   //=========================================================
   
   //Edge symbol: 'f_key'
   (function(symbolName) {   
   
   })("f_key");
   //Edge symbol end:'f_key'

   //=========================================================
   
   //Edge symbol: 'g_key'
   (function(symbolName) {   
   
   })("g_key");
   //Edge symbol end:'g_key'

   //=========================================================
   
   //Edge symbol: 'a_key'
   (function(symbolName) {   
   
   })("a_key");
   //Edge symbol end:'a_key'

   //=========================================================
   
   //Edge symbol: 'bsharp_key'
   (function(symbolName) {   
   
   })("bsharp_key");
   //Edge symbol end:'bsharp_key'

   //=========================================================
   
   //Edge symbol: 'asharp_key'
   (function(symbolName) {   
   
   })("asharp_key");
   //Edge symbol end:'asharp_key'

   //=========================================================
   
   //Edge symbol: 'esharp_key'
   (function(symbolName) {   
   
   })("esharp_key");
   //Edge symbol end:'esharp_key'

   //=========================================================
   
   //Edge symbol: 'dsharp_key'
   (function(symbolName) {   
   
   })("dsharp_key");
   //Edge symbol end:'dsharp_key'

   //=========================================================
   
   //Edge symbol: 'gsharp_key'
   (function(symbolName) {   
   
   })("gsharp_key");
   //Edge symbol end:'gsharp_key'

})(jQuery, AdobeEdge, "EDGE-64855210");