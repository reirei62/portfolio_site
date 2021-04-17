<html>
  <head>
    <title>index</title>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400&display=swap" rel="stylesheet">
    <style>
      *{
        font-family: 'M PLUS 1p', sans-serif;
        margin:0px;
        padding:0px;
        list-style:none;
        box-sizing:border-box;
      }
      html,body{
        height:100%;
      }
      .header{
        display:flex;
        position:fixed;
        top:0px;
        left:0px;
        background-color:#92C8E9;
        width:100%;
        height:6%;
      }
      .header-cover{
        width:100%;
        height:6%;
      }
      main{
        background-color:#92C8E9;
      }
      .footer-cover{
        width:100%;
        height:4%;
      }
      .footer{
        position:fixed;
        bottom:0px;
        left:0px;
        background-color:#155FCF;
        width:100%;
        height:4%;
      }
    </style>
    
  </head>
  <body>
    @include('components.header')
    <diV class="wrapper">
      <main>
        <image src="https://source.unsplash.com/random/400x400">
        <h2>About<h2>

        <nav>
          <ul>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </nav>
        <h2>過去の制作物</h2>
        <div class="product">
          <h3>他己紹介アプリTaqoo</h3>
            <div class="skill">
              Ruby
            </div>
            <div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo quam vitae provident in ex necessitatibus modi quae, earum delectus beatae ratione quos veniam eum ea aspernatur, nulla autem? Temporibus, officia.
            </div>
        </div>

        <div class="product">
          <h3>依頼サイト</h3>
            <div class="skill">
              Wordpress
            </div>
            <div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo quam vitae provident in ex necessitatibus modi quae, earum delectus beatae ratione quos veniam eum ea aspernatur, nulla autem? Temporibus, officia.
            </div>
        </div>

        <div class="product">
          <h3>このポートフォリオサイト明るくふんわり</h3>
            <div class="skill">
              PHP
            </div>
            <div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo quam vitae provident in ex necessitatibus modi quae, earum delectus beatae ratione quos veniam eum ea aspernatur, nulla autem? Temporibus, officia.
            </div>
        </div>
            
          
      </main>
    </div>
    @include('components.footer')
  </body>

</html>