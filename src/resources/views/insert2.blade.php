@include("layouts.head")

<div class="mainPageWrapper">
    <table>
        <tr><th>ProjectNumber</th><th>ProjectTitle</th><th>Comment</th></tr>
        @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->project_title }}</td>
            </tr>
        @endforeach
    </table>
</div>
@include("layouts.script")
