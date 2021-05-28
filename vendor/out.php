<?php
    session_start();
    header("Location: ../index");
    session_destroy();