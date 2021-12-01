<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jason Crew</title>
  <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css" />
</head>

<body>
  <section>
    <form action="create_crew.php" id="jason-list" class="border border-primary" method="POST">
      <div class="mb-3 p-3">
        <h3>Add Crew Memeber</h3>
        <br />
        <label for="lastname" class="form-label">Last Name</label>
        <input id="lastnameinp" type="text" style="width: 200px" name="lastname" value="" class="form-control" />
      </div>
      <div class="mb-3 p-3">
        <label for="firstname" class="form-label">First Name</label>
        <input id="firstnameinp" type="text" style="width: 200px" name="firstname" value="" class="form-control" />
      </div>
      <button class="btn btn-primary m-3">add crew member</button>
    </form>
  </section>
  <section>
    <h1 class="primary p-3">Argo Crew List</h1>
    <div class="p-5" id="root"></div>
  </section>

  <script src="app.js"></script>
</body>

</html>
<!-- http://localhost:8888/jason_list/jasoncrew.php -->