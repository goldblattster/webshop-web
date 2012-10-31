{extends file="base.tpl"}

{block name=title}Login{/block}

{block name=content}
<div class="row">
  <div class="six columns">
    <div class="panel callout">
      <form action="index.php?page=register" method="post">
        <div class="row">
          <div class="two mobile-one columns">
            <label class="right inline">Username:</label>
          </div>
          <div class="ten mobile-three columns">
            <input type="text" placeholder="e.g. Sushi" class="eight" />
          </div>
        </div>
        <div class="row">
          <div class="two mobile-one columns">
            <label class="right inline">Password:</label>
          </div>
          <div class="ten mobile-three columns">
            <input type="password" class="eight" />
          </div>
        </div>
        <button type="submit">Log In</button>
      </form>
    </div>
  </div>
  <div class="six columns">
    <div class="panel">
      <h5>No account? Register today!</h5>
      <p>If you don't have an account on this WebShop-enabled server, you can register below.</p>
      {helpers->button_link_to('register', 'Register Now')}
    </div>
  </div>
</div>
{/block}
