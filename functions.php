<?php

	function checkForClickBait() {

		$clickBait = strtolower($_POST["clickbait_head"]);

		$a = array(
                "scientists",
                "doctors",
                "hate",
                "stupid",
                "weird",
                "simple",
                "trick",
                "shocked me",
                "you'll never believe",
                "hack",
                "epic",
                "unbelievable"
            );

        $b = array(
                "so-called scientists",
                "so-called doctors",
                "aren't threatened by",
                "average",
                "completely normal",
                "ineffective",
                "method",
                "is no different than the others",
                "you won't really be surprised by",
                "slightly improve",
                "boring",
                "normal"
            );

        $honestHeadLine = str_replace($a, $b, $clickBait);

        return array($clickBait, $honestHeadLine);
	}

	function displayHonestHeadLine($clickBait, $honestHeadLine) {
		echo "<br><br><strong class='text-danger'>Original Headlines</strong><h4>" . ucwords($clickBait) . "</h4><hr>";
		echo "<strong class='text-success'>Honest Headlines</strong><h4>" . ucwords($honestHeadLine) . "</h4><hr>";
	}


?>