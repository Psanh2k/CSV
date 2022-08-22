  <div class="div">
      <a class="btn_href" href="./UserManagement">ListUser</a>
  </div>
  <div class="container">
      <div class="title">ADD USERS</div>
      <form action="./Register/KhachHangDangKy" method="POST">
          <div class="label">
              <label for="name">Username *</label>
              <label for="password" class="password">Password*</label>
              <label for="email" class="email">Email*</label>
          </div>
          <div class="input">
              <input type="text" id="name" name="username" placeholder="Enter your name..." required><span id="messageUn"></span>
              <input type="password" id="password" name="password" placeholder="Enter your password ..." required>
              <input type="email" id="email" name="email" required>
              <div id="messageUn"></div>
          </div>
          <div class="btn-submit">
              <button type="submit" id="btn" name="btn">Add User</button>
          </div>

      </form>


  </div>