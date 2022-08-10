<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
      <li class="breadcrumb-item">Frontend</li>
      <li class="breadcrumb-item active" aria-current="page">HTML</li>
   </ol>
</nav>
<div class="accordion" id="accordionExample">
   <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
         <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <strong>Define Element, Tag and Attribute in HTML.</strong>
         </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
         <div class="accordion-body">
            <p>The HTML Element is consists of HTML Tag and and Attributes e.g. Title, Paragraph etc.</p>
            <p>In the following example the paragraph element having  &lt;p&gt; and &lt;/p&gt; as start tag and end tag respectively. The class is the attribute and foo is the value of the attribute.</p>
            <code>
               <pre>&lt;p class="foo"&gt; This is paragraph&lt;/p&gt;</pre>
            </code>
         </div>
      </div>
   </div>
   <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         <strong>What are void elements in HTML?</strong>
         </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
         <div class="accordion-body">
            HTML elements which do not have closing tags or do not need to be closed are Void elements. For Example <code>&lt;br /&gt;, &lt;img /&gt;, &lt;hr /&gt;,</code> etc.
         </div>
      </div>
   </div>
   <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         <strong>What are Lists in HTML?</strong>
         </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
         <div class="accordion-body">
            <p>HTML lists are used to group a set of related items in lists. It is defined with an &lt;li&gt; tag.</p>
            <p>Some commonly used HTML lists:</p>
            <p>
               Ordered List (HTML tag: &lt;ol&gt;)<br>
               Unordered List (HTML tag: &lt;ul&gt;)<br>
               Description List (HTML tag: &lt;dl&gt;)<br>
               Menu List (HTML tag: &lt;menu&gt;)<br>
               Directory List (HTML tag: &lt;dir&gt;)
            </p>
         </div>
      </div>
   </div>
   <div class="accordion-item">
      <h2 class="accordion-header" id="headingFour">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
         <strong>What are HTML Entities?</strong>
         </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
         <div class="accordion-body">
            An HTML entity is a piece of text ("string") that begins with an ampersand ( & ) and ends with a semicolon ( ; ) . Entities are used to display reserved characters in HTML. View the complete list of <a href="https://www.freeformatter.com/html-entities.html" target="_blank">HTML entities</a> 
         </div>
      </div>
   </div>
   <div class="accordion-item">
      <h2 class="accordion-header" id="headingFive">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
         <strong>Define multipart form data.</strong>
         </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
         <div class="accordion-body">
            <p>Multipart form data is one of the values of the enctype attribute. It is used to send the file data to the server-side for processing. The other valid values of the enctype attribute are text/plain and application/x-www-form-urlencoded.</p>
         </div>
      </div>
   </div>
   <div class="accordion-item">
      <h2 class="accordion-header" id="headingSix">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
         <strong>Describe HTML layout structure.</strong>
         </button>
      </h2>
      <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix">
         <div class="accordion-body">
            <p>Every web page has different components to display the intended content and a specific UI. But still, there are few things which are templated and are globally accepted way to structure the web page, such as:</p>
            <p>
               <strong>&lt;header&gt;</strong>: Stores the starting information about the web page.<br>
               <strong>&lt;footer&gt;</strong>: Represents the last section of the page.<br>
               <strong>&lt;nav&gt;</strong>: The navigation menu of the HTML page.<br>
               <strong>&lt;article&gt;</strong>: It is a set of information.<br>
               <strong>&lt;section&gt;</strong>: It is used inside the article block to define the basic structure of a page.<br>
               <strong>&lt;aside&gt;</strong>: Sidebar content of the page.<br>
            </p>
         </div>
      </div>
   </div>
   <div class="accordion-item">
      <h2 class="accordion-header" id="headingSeven">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
         <strong>How to optimize website assets loading?</strong>
         </button>
      </h2>
      <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven">
         <div class="accordion-body">
            <p>To optimize website load time we need to optimize its asset loading and for that:</p>
            <p>
               <strong>&lt;CDN hosting&gt;</strong>: A CDN or content delivery network is geographically distributed servers to help reduce latency.<br>
               <strong>&lt;File concatenation&gt;</strong>: This reduces the number of HTTP calls.<br>
               <strong>&lt;Minify scripts&gt;</strong>: This reduces the overall file size of js and CSS files.<br>
               <strong>&lt;Parallel downloads&gt;</strong>: Hosting assets in multiple subdomains can help to bypass the download limit of 6 assets per domain of all modern browsers. This can be configured but most general users never modify these settings.<br>
               <strong>&lt;Lazy Loading&gt;</strong>: Instead of loading all the assets at once, the non-critical assets can be loaded on a need basis.<br>
            </p>
         </div>
      </div>
   </div>
   <div class="accordion-item">
      <h2 class="accordion-header" id="headingEight">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
         <strong>What are the different kinds of Doctypes available?</strong>
         </button>
      </h2>
      <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight">
         <div class="accordion-body">
            <p>The three kinds of Doctypes which are available:</p>
            <p>
               Strict Doctype<br>
               Transitional Doctype<br>
               Frameset Doctype<br>
            </p>
         </div>
      </div>
   </div>
   <div class="accordion-item">
      <h2 class="accordion-header" id="headingNine">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
         <strong>How is Cell Padding different from Cell Spacing?</strong>
         </button>
      </h2>
      <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine">
         <div class="accordion-body">
            <p>Cell Spacing is the space or gap between two consecutive cells. Whereas, Cell Padding is the space or gap between the text/ content of the cell and the edge/ border of the cell. Please refer to the above figure example to find the difference.</p>
         </div>
      </div>
   </div>
   <div class="accordion-item">
      <h2 class="accordion-header" id="headingTen">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
         <strong>In how many ways can we position an HTML element? Or what are the permissible values of the position attribute?</strong>
         </button>
      </h2>
      <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen">
         <div class="accordion-body">
            <p>There are mainly 7 values of position attribute that can be used to position an HTML element:</p>
            <p>
               <strong>static</strong>: Default value. Here the element is positioned according to the normal flow of the document.<br>
               <strong>absolute</strong>:  Here the element is positioned relative to its parent element. The final position is determined by the values of left, right, top, bottom.<br>
               <strong>fixed</strong>: This is similar to absolute except here the elements are positioned relative to the &lt;html&gt; element.<br>
               <strong>relative</strong>: Here the element is positioned according to the normal flow of the document and positioned relative to its original/ normal position.<br>
               <strong>initial</strong>: This resets the property to its default value.<br>
               <strong>inherit</strong>: Here the element inherits or takes the property of its parent.<br>
            </p>
         </div>
      </div>
   </div>
   <div class="accordion-item">
      <h2 class="accordion-header" id="headingEleven">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
         <strong>In how many ways you can display HTML elements?</strong>
         </button>
      </h2>
      <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven">
         <div class="accordion-body">
            <p>There are mainly 7 values of position attribute that can be used to position an HTML element:</p>
            <p>
               <strong>inline</strong>: Using this we can display any block-level element as an inline element. The height and width attribute values of the element will not affect.<br>
               <strong>block</strong>:  using this, we can display any inline element as a block-level element. <br>
               <strong>inline-block</strong>: This property is similar to inline, except by using the display as inline-block, we can actually format the element using height and width values.<br>
               <strong>flex</strong>: It displays the container and element as a flexible structure. It follows flexbox property.<br>
               <strong>inline-flex</strong>: It displays the flex container as an inline element while its content follows the flexbox properties.<br>
               <strong>grid</strong>: It displays the HTML elements as a grid container.<br>
               <strong>none</strong>: Using this property we can hide the HTML element.<br>
            </p>
         </div>
      </div>
   </div>
   <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwelve">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
         <strong>What is the difference between “display: none” and “visibility: hidden”, when used as attributes to the HTML element.</strong>
         </button>
      </h2>
      <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve">
         <div class="accordion-body">
            <p>When we use the attribute “visibility: hidden” for an HTML element then that element will be hidden from the webpage but still takes up space. Whereas, if we use the “display: none” attribute for an HTML element then the element will be hidden, and also it won’t take up any space on the webpage.</p>
         </div>
      </div>
   </div>
   <div class="accordion-item">
      <h2 class="accordion-header" id="headingThirteen">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
         <strong>How to specify the link in HTML and explain the target attribute?</strong>
         </button>
      </h2>
      <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen">
         <div class="accordion-body">
            <p>HTML provides a hyperlink - &lt;a&gt; tag to specify the links in a webpage. The 'href' attribute is used to specify the link and the 'target' attribute is used to specify, where do we want to open the linked document. The 'target' attribute can have the following values:</p>
            <p>
               <strong>_self</strong>: This is a default value. It opens the document in the same window or tab as it was clicked.<br>
               <strong>_blank</strong>:  It opens the document in a new window or tab.<br>
               <strong>_parent</strong>: It opens the document in a parent frame.<br>
               <strong>_top</strong>: It opens the document in a full-body window.<br>
            </p>            
         </div>
      </div>
   </div>
   <div class="accordion-item">
      <h2 class="accordion-header" id="headingFourteen">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
         <strong>Difference between link tag &lt;link&gt; and anchor tag &lt;a&gt;.</strong>
         </button>
      </h2>
      <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen">
         <div class="accordion-body">
            <p>The anchor tag &lt;a&gt; is used to create a hyperlink to another webpage or to a certain part of the webpage and these links are clickable, whereas, link tag &lt;link&gt; defines a link between a document and an external resource and these are not clickable.</p>
         </div>
      </div>
   </div>
   <div class="accordion-item">
      <h2 class="accordion-header" id="headingFifteen">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
         <strong>When to use scripts in the head and when to use scripts in the body?</strong>
         </button>
      </h2>
      <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen">
         <div class="accordion-body">
            <p>If the scripts contain some event-triggered functions or jquery library then we should use them in the head section. If the script writes the content on the page or is not inside a function then it should be placed inside the body section at the bottom. In short, follow below three points:</p>
            <p>
               <strong>Place library scripts or event scripts in the head section.</strong><br>
               <strong>Place normal scripts that do not write anything on the page, in the head section until there is any performance issue.</strong><br>
               <strong>Place scripts that render something on the web page at the bottom of the body section.</strong><br>
            </p>             
         </div>
      </div>
   </div>
   <div class="accordion-item">
      <h2 class="accordion-header" id="headingSixteen">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
         <strong>When to use scripts in the head and when to use scripts in the body?</strong>
         </button>
      </h2>
      <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen">
         <div class="accordion-body">
            <p>If the scripts contain some event-triggered functions or jquery library then we should use them in the head section. If the script writes the content on the page or is not inside a function then it should be placed inside the body section at the bottom. In short, follow below three points:</p>
            <p>
               <strong>Place library scripts or event scripts in the head section.</strong><br>
               <strong>Place normal scripts that do not write anything on the page, in the head section until there is any performance issue.</strong><br>
               <strong>Place scripts that render something on the web page at the bottom of the body section.</strong><br>
            </p>             
         </div>
      </div>
   </div>    
</div>
