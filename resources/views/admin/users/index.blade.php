<?php
/**
 * Created by PhpStorm.
 * User: Виктор Сидоренко
 * Date: 01.10.2016
 * Time: 15:41
 */
?>
<h1>Registered Users</h1>

<ul>
    @forelse ($users as $user)

        <li>{{ $user->name }} ({{ $user->email }})</li>

    @empty

        <li>No registered users</li>

    @endforelse
</ul>
