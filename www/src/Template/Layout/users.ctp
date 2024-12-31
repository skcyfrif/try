<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Form</title>

   <!--CSS-->
   <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
   <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
   <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
   <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css" />

   <!--CSS-->

</head>
<body class="dashboard-page">



        
        <?= $this->Flash->render() ?>




        <?= $this->fetch('content') ?>



        <!-- For Intermediate Learners -->
</body>
        </html>