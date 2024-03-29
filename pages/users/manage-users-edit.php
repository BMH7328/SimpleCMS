<?php

  // check if the current user is an admin or not
  if ( !isAdmin() ) {
    // if current user is not an admin, redirect to dashboard
    header("Location: /dashboard");
    exit;
  }

    // make sure the id parameter is available in the url
    if ( isset( $_GET['id'] ) ) {
      // load database
      $database = connectToDB();

      // load the user data based on the id
      $sql = "SELECT * FROM users WHERE id = :id";
      $query = $database->prepare( $sql );
      $query->execute([
        'id' => $_GET['id']
      ]);

      // fetch
      $user = $query->fetch();

      // make sure user data is found in database
      if ( !$user ) {
        // if user don't exists, then we redirect back to manage-users
        header("Location: /manage-users");
        exit;
      }

    } else {
      // if $_GET['id'] is not available, then redirect the user back to manage-users
      header("Location: /manage-users");
      exit;
    }

    require "parts/header.php";
?>
    <div class="container mx-auto my-5" style="max-width: 700px;">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <h1 class="h1">Edit User</h1>
      </div>
      <div class="card mb-2 p-4">
        <form>
          <div class="mb-3">
            <div class="row">
              <div class="col">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" />
              </div>
              <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" />
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-control" id="role" name="role">
              <option value="">Select an option</option>
              <option value="user" <?php
                if ( $user['role'] === 'user' ) {
                  echo 'selected';
                }
              ?>>User</option>
              <option value="editor" <?= $user['role'] === 'editor' ? 'selected' : ''; ?>>Editor</option>
              <option value="admin" <?=  $user['role'] === 'admin' ? 'selected' : ''; ?>>Admin</option>
            </select>
          </div>
          <div class="d-grid">
            <input type="hidden" name="id" value="<?= $user['id']; ?>" />
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
      <div class="text-center">
        <a href="/manage-users" class="btn btn-link btn-sm"
          ><i class="bi bi-arrow-left"></i> Back to Users</a
        >
      </div>
    </div>

<?php
  require "parts/footer.php";