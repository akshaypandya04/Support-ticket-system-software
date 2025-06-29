<?php


use App\Models\Ward;

function ward($id)
{
    $village = Ward::where('city_id', $id)->get();

    return count($village);
}

/**
 * Functions to show the error
 *
 * @param $key
 * @param $errors
 * @return string
 */
function error_for($key, $errors)
{
    if ($errors->has($key)) {
        return '<span class="text-danger">' . $errors->first($key) . '</span>';
    }
}

function isEmail($string)
{
    return filter_var($string, FILTER_VALIDATE_EMAIL);
}

function getToEmail($email)
{
    if (config('variables.email_debug.flag')) {
        $email = config('variables.email_debug.email');
    } else if (is_numeric($email)) {
        $role = \Spatie\Permission\Models\Role::findById($email);
        $email = $role->users();
    }
    return $email;
}

