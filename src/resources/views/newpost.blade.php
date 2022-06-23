@include("layouts.head")


<div class="mainPageWrapper">
    <form action="/newpost" method="post">
    <table>
        @csrf
        <tr><th>ProjectTitle: </th><td><input type="text" name="project_title">
            </td></tr>
        <tr><th>Comment: </th><td><input type="text" name="comment">
            </td></tr>
        <tr><th></th><td><input type="submit" value="send">
            </td></tr>
    </table>
    </form>
</div>
