<?php

namespace SalymMbise\Toaster;

class Toaster
{
    public static function add($type, $message)
    {
        if (!isset($_SESSION)) session_start();

        $_SESSION['salym_toasts'][] = [
            'type' => $type,
            'message' => $message
        ];
    }

    public static function success($msg) { self::add('success', $msg); }
    public static function info($msg) { self::add('info', $msg); }
    public static function warning($msg) { self::add('warning', $msg); }
    public static function danger($msg) { self::add('danger', $msg); }

    public static function render()
    {
        if (empty($_SESSION['salym_toasts'])) return;

        $toasts = $_SESSION['salym_toasts'];
        unset($_SESSION['salym_toasts']);

        include __DIR__ . "/Views/toast.php";
    }
}