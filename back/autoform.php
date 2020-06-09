<?php

class autoform
{

    /**
     * Affiche un input de type 'text' et de nom $name
     * @param $label texte descriptif de l'input
     * @param $name paramètre de l'input
     */
    public function getInputText($label, $name)
    {
        echo '<p><label for="' . $name . '">' . $label . ' : </label>';
        echo '<input type="text" id="' . $name . '" name="' . $name . '"></p>';

    }

    /**
     * Affiche un input de type 'text' et de nom $name
     * @param $label texte descriptif de l'input
     * @param $name paramètre de l'input
     * @param $value texte affiche dans l'input
     */
    public function getInputTextValue($label, $name, $value)
    {
        echo '<p><label for="' . $name . '">' . $label . ' : </label>';
        echo '<input type="text" id="' . $name . '" name="' . $name . '" value=" ' . $value . ' "></p>';

    }

    /**
     * Affiche un input de type 'text' et de nom $name
     * @param $label paramètre de l'input
     */
    public function getInputSubmit($label)
    {
        echo '<input type="submit" id="' . $label . '" name="' . $label . '"><br>';
    }

    /**
     * Affiche un menu déroulant et de nom $name
     * @param $label texte descriptif du menu déroulant
     * @param $name paramètre du menu déroulant
     * @param $values contenu du menu déroulant
     */
    public function getInputList($label, $name, $values)
    {
        echo '<p><label for="' . $name . '">' . $label . ' : </label><br>';
        echo '<select id="' . $name . '" name="' . $name . '">';
        foreach ($values as $value) {
            echo '<option value="' . $value . '">' . $value . '</option>';
        }
        echo "</select></p>";
    }

    /**
     * Affiche un input de type 'date' et de nom $name
     * @param $label texte descriptif de l'input
     * @param $name paramètre de l'input
     */
    public function getInputDate($label, $name)
    {
        echo '<p><label for="' . $name . '">' . $label . ' : </label> ';
        echo '<input type="date" id="' . $name . '" name="' . $name . '"></p>';
    }

    /**
     * Affiche un input de type 'radio' et de nom $name
     * @param $label texte descriptif de l'input
     * @param $name paramètre de l'input
     */
    public function getInputRadio($label, $name, $values)
    {
        echo '<p><label for="' . $name . '">' . $label . ' : </label> ';
        foreach ($values as $value) {
            echo '<label for="' . $name . '">' . $value . '</label>';
            echo '<input type="radio" id="' . $name . '" name="' . $name . '" value="' . $value . '">';
        }
    }

    /**
     * Affiche un input de type 'password' et de nom $name
     * @param $label texte descriptif de l'input
     * @param $name paramètre de l'input
     */
    public function getInputPassword($label, $name)
    {
        echo '<p><label for="' . $name . '">' . $label . ' : </label> ';
        echo '<input type="password" id="' . $name . '" name="' . $name . '" minlength="8" required></p>';
    }

    /**
     * Affiche une zone de texte et de nom $name
     * @param $label texte descriptif de la zone de texte
     * @param $name paramètre de la zone de texte
     */
    public function getInputTextArea($label, $name)
    {
        echo '<p><label for="' . $name . '">' . $label . ' : </label></p>';
        echo '</p><textarea id="' . $name . '" name="' . $name . '" rows="5" cols="33"></textarea></p>';
    }
}

?>
