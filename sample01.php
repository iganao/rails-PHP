<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Backpacker200209</title>
</head>
<body>
  <?php
  echo "テスト"
  ?>
</body>
</html>

<!-- 
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Backpacker200209</title>
    <%= csrf_meta_tags %>
    <%= csp_meta_tag %>
    <%= stylesheet_link_tag 'application', media: 'all', 'data-turbolinks-track': 'reload' %>
    <%= javascript_pack_tag 'application', 'data-turbolinks-track': 'reload' %>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700,900&display=swap" rel="stylesheet">
  </head>

  <body>
    <header class="header">
      <div class="nav">
          <div class="nav__left">
            <a href="/">
              <%= image_tag "logo8.png", class:"icon" %>
          </div>
              <div class="font">Backpacker</div>
            </a>

          <% if user_signed_in? %>
            <div class="nav__right">
              <%= link_to "Logout", destroy_user_session_path, method: :delete, class: :nav__btn %>
              <%= link_to "New Article", new_article_path, class: :nav__btn %>
            </div>

          <% else %>
            <div class="nav__right">
              <%= link_to "Login", new_user_session_path, class: :nav__btn %>
              <%= link_to "SignUp", new_user_registration_path, class: :nav__btn %>
            </div>
          <% end %>
      </div>
      <div class="inner">
      </div>
    </header>
    <%= yield %>
    <footer class="footer">
      <p class="copyright">Copyright © Backpacker 200209 All rights reserved.</p>
    </footer>
  </body>
</html> -->