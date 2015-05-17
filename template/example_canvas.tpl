<span class="doctype">&lt;!DOCTYPE html&gt;</span> 
 
 <span class="tag">&lt;html&gt;</span>
 <span class="tag">&lt;head&gt;</span>
  <span class="tag">&lt;title&gt;</span>canvas<span class="tag">&lt;/title&gt;</span>
  <span class="tag">&lt;meta <span class="attribute">charset=</span><span class="value">&quot;utf-8&quot;</span>&gt;</span>
  <span class="tag">&lt;script&gt;</span>
   window.onload = <span class="function"><span class="keyword">function</span><span class="params">()</span></span> {
    <span class="keyword">var</span> drawingCanvas = document.getElementById('smile');
    <span class="keyword">if</span>(drawingCanvas &amp;&amp; drawingCanvas.getContext) {
     <span class="keyword">var</span> context = drawingCanvas.getContext('2d');
     <span class="comment">// Рисуем окружность</span> 
     context.strokeStyle = &quot;#000&quot;;
     context.fillStyle = &quot;#fc0&quot;;
     context.beginPath();
     context.arc(<span class="number">100</span>,<span class="number">100</span>,<span class="number">50</span>,<span class="number">0</span>,Math.PI*<span class="number">2</span>,true);
     context.closePath();
     context.stroke();
     context.fill();
     <span class="comment">// Рисуем левый глаз</span> 
     context.fillStyle = &quot;#fff&quot;;
     context.beginPath();
     context.arc(<span class="number">84</span>,<span class="number">90</span>,<span class="number">8</span>,<span class="number">0</span>,Math.PI*<span class="number">2</span>,true);
     context.closePath();
     context.stroke();
     context.fill();
     <span class="comment">// Рисуем правый глаз</span> 
     context.beginPath();
     context.arc(<span class="number">116</span>,<span class="number">90</span>,<span class="number">8</span>,<span class="number">0</span>,Math.PI*<span class="number">2</span>,true);
     context.closePath();
     context.stroke();
     context.fill();
     <span class="comment">// Рисуем рот</span> 
     context.beginPath();
     context.moveTo(<span class="number">70</span>,<span class="number">115</span>);
     context.quadraticCurveTo(<span class="number">100</span>,<span class="number">130</span>,<span class="number">130</span>,<span class="number">115</span>);
     context.quadraticCurveTo(<span class="number">100</span>,<span class="number">150</span>,<span class="number">70</span>,<span class="number">115</span>); 
     context.closePath();
     context.stroke();
     context.fill();
    }
   }
  <span class="tag">&lt;/script&gt;</span>
 <span class="tag">&lt;/head&gt;</span>
 <span class="tag">&lt;body&gt;</span>
  <span class="tag">&lt;canvas <span class="attribute">id=</span><span class="value">&quot;smile&quot;</span> <span class="attribute">width=</span><span class="value">&quot;200&quot;</span> <span class="attribute">height=</span><span class="value">&quot;200&quot;</span>&gt;</span>
    <span class="tag">&lt;p&gt;</span>Ваш браузер не поддерживает рисование.<span class="tag">&lt;/p&gt;</span>
  <span class="tag">&lt;/canvas&gt;</span>
 <span class="tag">&lt;/body&gt;</span>
<span class="tag">&lt;/html&gt;</span>