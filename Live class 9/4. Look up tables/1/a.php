<?php

function getBanglaDay($day) {
    if ($day === 'Saturday') {
        return 'শনিবার';
    } elseif($day === 'Sunday') {
        return 'রবিবার';
    } elseif($day === 'Monday') {
        return 'সোমবার';
    } elseif($day === 'Tuesday') {
        return 'মঙ্গলবার';
    } elseif($day === 'Wednesday') {
        return 'বুধবার';
    } elseif($day === 'Thursday') {
        return 'বৃহস্পতিবার';
    } elseif($day === 'Friday') {
        return 'শুক্রবার';
    }

    return '';
}

getBanglaDay('Sunday');