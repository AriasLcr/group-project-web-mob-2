<?php
    $pagetitle = "Unix Survival Guide - Practice Lessons";
    include("./assets/inc/header.php");
?>

<div id="content">
    <h1>Practice Lesson<br><br></h1>
    <section class="lesson">
        <h2>Lesson 1: Introduction to UNIX</h2>
        <h3>Unix Basics</h3>
        <!--A few points talking about the basics of UNIX-->
        <ul>
            <li>
                <strong>File System</strong><br>
                UNIX employs a hierarchical file system structure for organizing data, starting from the root directory and branching out into subdirectories and files.
            </li>
            <li>
                <strong>Processes</strong><br>
                UNIX is a multitasking operating system capable of running multiple processes simultaneously. Processes represent instances of programs being executed.
            </li>
            <li>
                <strong>Users</strong><br>
                UNIX supports multiple users, each with their account, providing a private workspace and access to system resources.
            </li>
        </ul>
        <h3>Command-line interface (CLI)</h3>
        <p>UNIX predominantly operates through a command-line interface (CLI), allowing users to interact with the system by typing commands.</p>
    </section>
    <hr>
    <section class="lesson">
        <h2>Lesson 2: File System Navigation and Manipulation</h2>
        <!--A few points talking about file system navigation/manipulation-->
        <p>
            UNIX employs a hierarchical structure for file organization, akin to branches of a tree. 
            Commands like cd, pwd, and ls facilitate navigation through directories, helping users find their way around.
        </p>
        <h3>Main Navigation Commands</h3>
        <!--Some basic Unix commands-->
        <ul>
            <li>
                <strong><strong class="code">cd</strong> (Change Directory)</strong><br>
                Use "cd" followed by a directory name to navigate into that directory. 
                Example: <strong class="code">cd Documents</strong> changes the current directory to <strong class="code">Documents</strong>.
            </li>
            <li>
                <strong><strong class="code">pwd</strong> (Print Working Directory)</strong><br>
                Displays the full path of the current working directory. Helps you know where you are within the file system. 
                Example: Typing <strong class="code">pwd</strong> might output <strong class="code">/home/user/Documents</strong>.
            </li>
            <li>
                <strong><strong class="code">ls</strong> (List Directory Contents)</strong><br>
                Lists the files and directories in the current directory. Helps you see what's inside a directory. 
                Example: <strong class="code">ls</strong> lists the files and directories in the current location.
            </li>
        </ul>
        
        <h3>File Manipulation</h3>
        <!--Some more stuff about file navigation-->
        <ul>
            <li>
                <strong class="code">touch</strong><br>
                Besides creating empty files, <strong class="code">touch</strong> updates file timestamps. 
                For example, <strong class="code">touch example.txt</strong> updates the timestamp of <strong class="code">example.txt</strong> to the current time.
            </li>
            <li>
                <strong><strong class="code">rm</strong> (Remove)</strong><br>
                To remove files or directories, type <strong class="code">rm</strong> followed by the filename or directory name. 
                For example, <strong class="code">rm example.txt</strong> deletes <strong class="code">example.txt</strong>.
            </li>
            <li>
                <strong><strong class="code">mv</strong> (Move)</strong><br>
                Use "mv" to move files or rename them. 
                For instance, <strong class="code">mv example.txt new_directory/</strong> moves <strong class="code">example.txt</strong> to the directory <strong class="code">new_directory/</strong>.
            </li>
            <li>
                <strong><strong class="code">cp</strong> (Copy)</strong><br>
                To copy files from one location to another, type <strong class="code">cp</strong> followed by the filename and destination. 
                For example, <strong class="code">cp example.txt backup/</strong> copies <strong class="code">example.txt</strong> to the directory <strong class="code">backup/</strong>.
            </li>
        </ul>
    </section>
    <hr>
    <section class="lesson">
        <h2>Lesson 3: Text Processing and Redirection</h2>
        <!--Some points about text file manipulation-->
        <h3>Text File Manipulation</h3>
        <ul>
            <li>
                <strong class="code">cat</strong><br>
                <strong class="code">cat</strong> is a command that shows the contents of a file on your screen. You can use it to display the contents of one or multiple files in a row. 
            </li>
            <li>
                <strong class="code">grep</strong><br>
                <strong class="code">grep</strong> helps you search for specific words or patterns in a file. 
                For example, if you're looking for all the line content of the word <strong class="code">hotdog</strong> in a file, grep will find and show them to you. 
            </li>
        </ul>
        <h3>Redirection</h3>
        <!--Some points about redirecting-->
        <ul>
            <li>
                <strong class="code">></strong><br>
                When the <strong class="code">></strong> command is used, it sends the output of that command to a file, and it replaces the content of the file if it already exists.
            </li>
            <li>
                <strong class="code">>></strong><br>
                The <strong class="code">>></strong> command works similarly to <strong class="code">></strong> but instead of replacing the content of a file it adds the output of a command to the end of a file.
            </li>
        </ul>
    </section>
    <hr>
    <section class="lesson">
        <h2>Lesson 4: Process Management and System Monitoring Content</h2>
        <!--Here we talk about viewing processes for process management-->
        <h3>Viewing Processes</h3>
        <ul>
            <li>
                <strong class="code">ps</strong><br>
                <strong class="code">ps</strong> shows you the programs that are running and their IDs.
            </li> 
            <li>
                <strong class="code">top</strong><br>
                <strong class="code">top</strong> constantly updates to show you which programs are using the most resources like CPU and memory.
            </li>
        </ul>
        <!--Managing processes for system monitoring-->
        <h3>Managing Processes</h3>
        <ul>
            <li>
                <strong class="code">kill</strong><br>
                <strong class="code">kill</strong> will tell the computer to end a program.
            </li>
        </ul>
        <h3>System Monitoring</h3>
        <ul>
            <li>
                <strong class="code">uptime</strong><br>
                This command tells you how long your computer has been running since it started up.
            </li>
            <li>
                <strong class="code">free</strong><br>
                This command checks your computer's memory. It shows you how much memory is being used and how much is still available.
            </li>
        </ul>
    </section>
</div>

<?php
    include("./assets/inc/footer.php");
?>