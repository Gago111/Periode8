<!-- Leden lijst -->
<?php
require_once "config.php";

  if(!isset($_SESSION))
  {
      session_start();
  }

$id = mysqli_real_escape_string($link, $_REQUEST['id']);

$yourURL = get_the_permalink(162);

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    echo ("<script>location.href='$yourURL'</script>");
}

$sql = "SELECT * FROM user_data WHERE id" . $id;

$result = mysqli_query($link,$sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <script src="https://kit.fontawesome.com/908d34b458.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.min.css">



  </head>
  <body>

    <style>

    #text-2 p ,li,h2 {
      color:gray;
    }

    @media screen and (min-width: 44.375em) {
      .site {
        margin: 0px;
      }
    }

    .site-inner {
      margin: 0 auto;
      max-width: 100%;
      position: relative;
    }

    .header-image a {
      text-align: center;
    }

      h1.entry-title {
        display:none;
      }

      h2 {
        background: steelblue;
        padding: 10px 22px;
      }

      section#text-2 {
        display:none!important;
      }

      .widget-title {
        display:none;
      }

      .widget .widget_text {
        display:none!important;
      }

      section#search-3 {
        display:none;
      }

      .textwidget {
        display:none;
      }

      table {width:100%;}
      img {display:none;}
      th,td {padding:0.55rem;}
      td {vertical-align: middle!important;}
      img.pf {border-radius:50%; display: unset;}

      @media screen and (min-width: 56.875em) {
      .content-area {
          float: left;
          margin-right: -100%;
          width: 100%;
      }
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }
    /* Zebra striping */
    tr:nth-of-type(odd) {
      background: #eee;
    }
    th {
      background: steelblue;
      color: white;
      font-weight: bold;
    }
    td, th {
      padding: 6px;
      border: 1px solid #ccc;
      text-align: left;
    }

    body {
      font-family: "Open Sans", sans-serif;
      line-height: 1.25;
    }

    table {
      border: 1px solid #ccc;
      border-collapse: collapse;
      margin: 0;
      padding: 0;
      width: 100%;
      table-layout: auto;
    }

    table caption {
      font-size: 1.5em;
      margin: .5em 0 .75em;
    }

    table tr {
      background-color: #f8f8f8;
      border: 1px solid #ddd;
      padding: .35em;
    }

    table th,
    table td {
      padding: 0.465rem;
      text-align: center;
      font-size:0.8rem;
    }

    table th {
      font-size: .80em;
    }

    @media screen and (max-width: 1150px) {
    	td {
    		font-size:13.5px;
    	}
    	th {
    		font-size:12px!important;
    	}
    }

    @media screen and (max-width: 1050px) {
    	td {
    		font-size:12.5px;
    	}
    	th {
    		font-size:10px!important;
    	}
    }

    @media screen and (max-width: 920px) {
      table {
        border: 0;
      }

      table caption {
        font-size: 1.3em;
      }

      table thead {
        border: none;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }

      table tr {
        border-bottom: 3px solid #ddd;
        display: block;
        margin-bottom: .625em;
      }

      table td {
        border-bottom: 1px solid #ddd;
        display: block;
        font-size: .95em;
        padding: 1.1rem;
        text-align: right;
      }

      table td::before {
        /*
        * aria-label has no advantage, it won't be read inside a table
        content: attr(aria-label);
        */
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;
      }

      table td:last-child {
        border-bottom: 0;
      }
    }

    .mec-calendar .mec-calendar-topsec {
      display: table;
      background: transparent;
    }

    .mec-calendar .mec-calendar-events-side {
      display: inline-block;
      height: 100%;
      border:none;
      padding: 40px;
      width: 100%;
    }

  .mec-calendar {
    margin-bottom: 20px;
    border: none;
    width: 100%;
    box-shadow: 0 2px 0 0 rgba(0,0,0,.016);
  }

  .mec-calendar .mec-event-footer {
    display: none;
  }

  .mec-box-calendar.mec-calendar .mec-calendar-events-side {
    background: transparent;
    border: none;
  }


  .mec-box-calendar.mec-calendar .mec-calendar-events-side {
      background: none;
      border: none;
  }

.mec-calendar .mec-calendar-events-side .mec-table-side-title {
    color: #fff;
}

.mec-calendar .mec-calendar-events-side .mec-table-side-day {
  color: #fff;
}

.mec-calendar .mec-event-article .mec-event-time {
    font-size: 17px;
}

.mec-calendar .mec-event-article .mec-event-title {
    font-size: 13px;
}

.mec-calendar .mec-event-article .mec-event-title a {
    color: black;
    font-size: 17px;
}

.mec-calendar .mec-event-article .mec-event-detail {
    font-size: 16px;
}

.mec-wrap .mec-totalcal-box {
  display: none;
}

.mec-calendar .mec-event-article {
    text-align: center;
}

  @media only screen and (max-width: 767px) {
    .mec-calendar .mec-calendar-side {
      max-width: 100%;
      display: block;
      padding: 0px;
    }
  }

  a {
    text-decoration: none;
  }
  </style>

    <div class="container-fluid">
      <h2 class="text-white">Ledenlijst</h2>
        <table style="margin-bottom:52px;">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Foto</th>
              <th scope="col">Naam</th>
              <th scope="col">Stemsoort</th>
              <th scope="col">Adres</th>
              <th scope="col">Postcode</th>
              <th scope="col">Plaats</th>
              <th scope="col">Telefoon</th>
              <th scope="col">Mobiel</th>
              <th scope="col">E-mail</th>
              <th scope="col">Status</th>
              <th scope="col">Lid sinds</th>
              <th scope="col">Lid tot</th>
            </tr>
           </thead>
          <tbody>
          <?php foreach ($users as $user): ?>
            <?php  $delete = get_the_permalink(198); ?>

          <tr>
            <td data-label="#"><?php echo $user['id']; ?></td>
            <td data-label="Foto"><img class="pf" src="<?php echo plugin_dir_url( __FILE__ ) . 'images/'; echo $user['foto'];?>" width="50" height="20" alt=""></td>
            <td data-label="Naam" ><?php echo $user['voornaam'];?> <?php echo $user['tussenvoegsel'];?> <?php echo $user['achternaam'];?>
            <td data-label="Stemsooort"><?php echo $user['stemsoort']; ?></td>
            <td data-label="Adres"><?php echo $user['adres']; ?></td>
            <td data-label="Postcode"><?php echo $user['postcode']; ?></td>
            <td data-label="Plaats"><?php echo $user['plaats']; ?></td>
            <td data-label="Telefoon"><?php echo $user['telefoon']; ?></td>
            <td data-label="Mobiel"><?php echo $user['mobiel']; ?></td>
            <td data-label="E-mail"><?php echo $user['email']; ?></td>
            <td data-label="Status"><?php echo $user['status']; ?></td>
            <td data-label="Lid sinds"><?php echo $user['lid_sinds']; ?></td>
            <td data-label="Lid tot"><?php echo $user['lid_tot']; ?></td>
            <?php $current_user = wp_get_current_user();
              if (user_can( $current_user, 'administrator' )) { ?>
            <?= "<td><a href='$delete?delete=$user[id]' onClick=\"return confirm('Profiel van $user[voornaam] verwijderen?');\"><i style='font-size:30px; color:red' class='far fa-times-circle'></i></a></td>;"?>
          <?php } ?>
          </tr>
          <?php endforeach; ?>

        </tbody>
      </table>

      <?php if (empty($user)) {
        echo "Geen leden";
      } ?>

      </div>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Conflict met datepicker -->
      <!-- <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script> -->

  </body>
</html>
