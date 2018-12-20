<!-- Create Hero Modal -->
<div class="modal fade" id="createHero" tabindex="-1" role="dialog" aria-labelledby="createHeroLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createHeroLabel">Create a Hero</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="create-hero-form" method="post" role="form">
                <div class="modal-body">
                    <input hidden type="text" class="form-control" id="hero-id">
                    <div class="form-group">
                        <label for="hero-title" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" name="hero-title" id="hero-title" required>
                    </div>
                    <div class="form-group">
                        <label for="hero-content" class="col-form-label">Content:</label>
                        <textarea class="form-control" name="hero-content" id="hero-content" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="hero-call-to-action" class="col-form-label">Call to Action:</label>
                        <input class="form-control" name="hero-call-to-action" id="hero-call-to-action" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="hero-create-button" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Create Post Modal -->
<div class="modal fade" id="createPost" tabindex="-1" role="dialog" aria-labelledby="createPostLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createPostLabel">Create a Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="create-post-form" method="post" role="form">
                <div class="modal-body">
                    <input hidden type="text" class="form-control" id="post-id">
                    <div class="form-group">
                        <label for="post-title" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" name="post-title" id="post-title" required>
                    </div>
                    <div class="form-group">
                        <label for="create-post-brief" class="col-form-label">Brief:</label>
                        <textarea class="form-control" name="create-post-brief" id="create-post-brief" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="post-content" class="col-form-label">Content:</label>
                        <textarea class="form-control" name="post-content" id="post-content" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="post-thumbnail" class="col-form-label">Thumbnail:</label>
                        <input class="form-control" name="post-thumbnail" id="post-thumbnail" required>
                    </div>
                    <div class="form-group">
                        <label for="post-call-to-action" class="col-form-label">Call to Action:</label>
                        <input class="form-control" name="post-call-to-action" id="post-call-to-action" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="post-create-button" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Hero Modal -->
<div class="modal fade" id="editHero" tabindex="-1" role="dialog" aria-labelledby="editHeroLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editHeroLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="edit-hero-form" method="post" role="form">
                <div class="modal-body">
                    <input hidden type="text" class="form-control" id="edit-hero-id">
                    <div class="form-group">
                        <label for="edit-hero-title" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" name="edit-hero-title" id="edit-hero-title" required>
                    </div>
                    <div class="form-group">
                        <label for="edit-hero-content" class="col-form-label">Content:</label>
                        <textarea class="form-control" name="edit-hero-content" id="edit-hero-content" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit-hero-call-to-action" class="col-form-label">Call to Action:</label>
                        <input class="form-control" name="edit-hero-call-to-action" id="edit-hero-call-to-action" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="edit-hero-save-button" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Post Modal -->
<div class="modal fade" id="editPost" tabindex="-1" role="dialog" aria-labelledby="editPostLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPostLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="edit-post-form" method="post" role="form">
                <div class="modal-body">
                    <input hidden type="text" class="form-control" id="post-id">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" name="recipient-name" id="recipient-name" required>
                    </div>
                    <div class="form-group">
                        <label for="edit-post-brief" class="col-form-label">Brief:</label>
                        <textarea class="form-control" name="edit-post-brief" id="edit-post-brief" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Content:</label>
                        <textarea class="form-control" name="message-text" id="message-text" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="thumbnail" class="col-form-label">Thumbnail:</label>
                        <input class="form-control" name="thumbnail" id="thumbnail" required>
                    </div>
                    <div class="form-group">
                        <label for="call-to-action" class="col-form-label">Call to Action:</label>
                        <input class="form-control" name="call-to-action" id="call-to-action" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="save-button" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="deletePost">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="delete-modal-title">Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p id="delete-modal-body"></p>
        </div>
        <form id="create-hero-form" method="get" role="form">
            <div class="modal-footer">
                <input hidden type="text" class="form-control" id="post-id">
                <button type="button" type="submit" id="delete-post-button" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">

    $('#createPost').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)

    });

    $('#hero-create-button').click(function() {

        var title = $('#hero-title').val();
        var content = $('#hero-content').val();
        var call_to_action = $('#hero-call-to-action').val();

        // Save the post with AJAX
        $.ajax({
            type : 'post',
            url : '{{ URL::to('/hero/create') }}',
            data:{"_token": "{{ csrf_token() }}", 'hero_title':title, 'hero_content':content, 'hero_call_to_action':call_to_action},
            success:function(data){
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });

        // Hide the Modal
        $('#createHero').modal('toggle');
    });

    $('#post-create-button').click(function() {

        var title = $('#post-title').val();
        var brief = $('#create-post-brief').val();
        var content = $('#post-content').val();
        var thumbnail = $('#post-thumbnail').val();
        var call_to_action = $('#post-call-to-action').val();
        
        // Save the post with AJAX
        $.ajax({
            type : 'post',
            url : '{{ URL::to('/post/create') }}',
            data:{"_token": "{{ csrf_token() }}", 'post_title':title, 'post_brief':brief, 'post_content':content, 'post_thumbnail':thumbnail, 'post_call_to_action':call_to_action},
            success:function(data){
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });

        // Hide the Modal
        $('#createPost').modal('toggle');
    });

    $('#editPost').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        
        $.ajax({
            type : 'get',
            url : '{{ URL::to('/grab') }}',
            data:{"_token": "{{ csrf_token() }}", 'id':recipient},
            success:function(data){
                //$('tbody').html(data);
                //console.log(data);
                //$('#search-results').html(data);
                // Populate the Modal with the correct post content
                console.log(data);
                modal.find('.modal-title').text('Edit ' + data['post_title'])
                $('#save-button').val(data['id']);
                $('#recipient-name').val(data['post_title']);
                $('#edit-post-brief').val(data['post_brief']);
                $('#message-text').val(data['post_content']);
                $('#thumbnail').val(data['post_thumbnail']);
                $('#call-to-action').val(data['post_call_to_action']);
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
    });

    $('#save-button').click(function() {
        var id = $(this).val();
        var title = $('#recipient-name').val();
        var brief = $('#edit-post-brief').val();
        var content = $('#message-text').val();
        var thumbnail = $('#thumbnail').val();
        var call_to_action = $('#call-to-action').val();

        console.log(content);
        // Save the post with AJAX
        $.ajax({
            type : 'get',
            url : '{{ URL::to('/post/update') }}',
            data:{"_token": "{{ csrf_token() }}", 'id':id, 'post_title':title, 'post_brief':brief, 'post_content':content, 'post_thumbnail':thumbnail, 'post_call_to_action':call_to_action},
            success:function(data){
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });

        // Hide the Modal
        $('#editPost').modal('toggle');
    });

    $('#editHero').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)

        $.ajax({
            type : 'get',
            url : '{{ URL::to('/hero/retrieve') }}',
            data:{"_token": "{{ csrf_token() }}", 'id':id},
            success:function(data){
                //$('tbody').html(data);
                console.log(data);
                //$('#search-results').html(data);
                // Populate the Modal with the correct post content
                modal.find('.modal-title').text('Edit ' + data['hero_title'])
                $('#edit-hero-save-button').val(data['id']);
                $('#edit-hero-title').val(data['hero_title']);
                $('#edit-hero-content').val(data['hero_content']);
                $('#edit-hero-call-to-action').val(data['hero_call_to_action']);
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
    });

    $('#edit-hero-save-button').click(function() {
        var id = $(this).val();
        var title = $('#edit-hero-title').val();
        var content = $('#edit-hero-content').val();
        var call_to_action = $('#edit-hero-call-to-action').val();

        console.log(content);
        // Save the post with AJAX
        $.ajax({
            type : 'get',
            url : '{{ URL::to('/hero/update') }}',
            data:{"_token": "{{ csrf_token() }}", 'id':id, 'hero_title':title, 'hero_content':content, 'hero_call_to_action':call_to_action},
            success:function(data){
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });

        // Hide the Modal
        $('#editHero').modal('toggle');
    });

    $('#deletePost').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        
        $.ajax({
            type : 'get',
            url : '{{ URL::to('/grab') }}',
            data:{"_token": "{{ csrf_token() }}", 'id':id},
            success:function(data){
                //$('tbody').html(data);
                //console.log(data);
                //$('#search-results').html(data);
                // Populate the Modal with the correct post content
                console.log(data);
                modal.find('.modal-title').text('Woah! Be careful, {{ Auth::user()->name }}!');
                modal.find('#delete-modal-body').text('Are you sure you want to delete the ' + data['post_title'] + ' post?');
                $('#delete-post-button').val(data['id']);
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
    });

    $('#delete-post-button').click(function() {
        var id = $(this).val();

        // Save the post with AJAX
        $.ajax({
            type : 'get',
            url : '{{ URL::to('/post/delete/') }}',
            data:{"_token": "{{ csrf_token() }}", 'id':id },
            success:function(data){
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });

        // Hide the Modal
        $('#deletePost').modal('toggle');
    });
</script>
@endsection