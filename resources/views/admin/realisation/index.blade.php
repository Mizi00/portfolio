@extends('layouts.app')

@section('body')
<x-admin.navbar />


<div class="table-div">
    <table class="table-realisation">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Salary</th>
        </thead>
        <tbody>
            @for($i=1; $i<=6; $i++)
                <tr>
                    <th>{{ $i }}</th>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>$320,800</td>
                </tr>
            @endfor
            
        </tbody>
    </table>
</div>