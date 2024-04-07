<?php
    $pagetitle = "Unix Survival Guide - Commands";
    include("./assets/inc/header.php");
?>
    <div id="content">
      <h1>Commands<br><br></h1>
      <section class="command">
        <p>
            <strong>ls:</strong> Lists the contents of a directory.
            <img src="assets/images/ls_example.png" alt="ls example">
        </p>
      </section>
      <section class="command-short">
        <p>
            <strong>cd:</strong> Changes the current directory.
            <br>
            <img src="assets/images/cd_example.png" alt="cd example">
        </p>
      </section>

      <section class="command-short">
          <p>
              <strong>pwd:</strong> Prints the current working directory.
              <br>
              <img src="assets/images/pwd_example.png" alt="pwd example">
          </p>
      </section>

      <section class="command-short">
          <p>
              <strong>mkdir:</strong> Creates a new directory.
              <br>
              <img src="assets/images/mkdir_example.png" alt="mkdir example">
          </p>
      </section>

      <section class="command-short">
          <p>
              <strong>touch:</strong> Creates a new file or updates the timestamp of an existing file.
              <br>
              <img src="assets/images/touch_example.png" alt="touch example">
          </p>
      </section>

      <section class="command-short">
          <p>
              <strong>rm:</strong> Removes (deletes) files or directories.
              <br>
              <img src="assets/images/rm_example.png" alt="rm example">
          </p>
      </section>

      <section class="command-short">
          <p>
              <strong>cat:</strong> Displays the contents of a file.
              <br>
              <img src="assets/images/cat_example.png" alt="cat example">
          </p>
      </section>

      <section class="command-short">
          <p>
              <strong>grep:</strong> Searches for specific words or patterns in a file.
              <br>
              <img src="assets/images/grep_example.png" alt="grep example">
          </p>
      </section>

      <section class="command-long">
          <p>
              <strong>>:</strong> Sends the output of a command to a file, replacing its content if it already exists.
              <br>
              <img src="assets/images/1_example.png" alt="> example">
          </p>
      </section>

      <section class="command-long">
          <p>
              <strong>>>>:</strong> Appends the output of a command to the end of a file.
              <br>
              <img src="assets/images/2_example.png" alt=">> example">
          </p>
      </section>

      <section class="command">
          <p>
              <strong>ps:</strong> Shows the programs that are running and their IDs.
              <br>
              <img src="assets/images/ps_example.png" alt="ps example">
          </p>
      </section>

      <section class="command-very-long">
          <p>
              <strong>top:</strong> Constantly updates to show which programs are using the most resources like CPU and memory.
              <br>
              <img src="assets/images/top_example.png" alt="top example">
          </p>
      </section>

      <section class="command-long">
          <p>
              <strong>kill:</strong> Stops a program.
              <br>
              <img src="assets/images/kill_example.png" alt="kill example">
          </p>
      </section>

      <section class="command-short">
          <p>
              <strong>uptime:</strong> Tells you how long your computer has been running since.
              <br>
              <img src="assets/images/uptime_example.png" alt="uptime example">
          </p>
      </section>

      <section class="command">
          <p>
              <strong>free:</strong> Checks your computer’s memory, showing how much memory is being used and how much is still available.
              <br>
              <img src="assets/images/free_example.png" alt="free example">
          </p>
      </section>

    </div>
  <?php
    include("./assets/inc/footer.php");
  ?>