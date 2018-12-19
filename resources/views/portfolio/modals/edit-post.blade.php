<!-- Create Document Modal -->
<div class="modal fade" id="createDocument" tabindex="-1" role="dialog" aria-labelledby="createDocumentLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDocumentLabel">Attach a Document Link</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="create-document-form" method="post" role="form">
                <div class="modal-body">
                    <input hidden type="text" class="form-control" id="post-id">
                    <div class="form-group">
                        <label for="document-name" class="col-form-label">Document Name:</label>
                        <input type="text" class="form-control" name="document-name" id="document-name" required>
                    </div>
                    <div class="form-group">
                        <label for="document-link" class="col-form-label">Document <i>Absolute</i> Link:</label>
                        <textarea class="form-control" name="document-link" id="document-link" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="document-create-button" class="btn btn-primary">Attach</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Document Modal -->
<div class="modal fade" id="editDocument" tabindex="-1" role="dialog" aria-labelledby="editDocumentLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDocumentLabel">Edit a Document Link</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="edit-document-form" method="get" role="form">
                <div class="modal-body">
                    <input hidden type="text" class="form-control" id="post-id">
                    <div class="form-group">
                        <label for="edit-document-name" class="col-form-label">Document Name:</label>
                        <input type="text" class="form-control" name="edit-document-name" id="edit-document-name" required>
                    </div>
                    <div class="form-group">
                        <label for="edit-document-link" class="col-form-label">Document <i>Absolute</i> Link:</label>
                        <textarea class="form-control" name="edit-document-link" id="edit-document-link" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="document-edit-button" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">

    $('#createDocument').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#post-id').attr("value", id);
        modal.find('#document-create-button').attr("value", id);

    });

    $('#document-create-button').click(function() {
        var id = $(this).val();
        var title = $('#document-name').val();
        var link = $('#document-link').val();
        // Save the post with AJAX
        $.ajax({
            type : 'post',
            url : '{{ URL::to('/document/create') }}',
            data:{"_token": "{{ csrf_token() }}", 'id':id, 'document_title':title, 'document_link':link},
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

    $('#editDocument').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#post-id').attr("value", id);
        $.ajax({
            type : 'get',
            url : '{{ URL::to('/document/grab') }}',
            data:{"_token": "{{ csrf_token() }}", 'id':id},
            success:function(data){
                // Populate the Modal with the correct post content
                console.log(data);
                modal.find('.modal-title').text('Edit ' + data['document_name'])
                $('#edit-document-name').val(data['document_name']);
                $('#edit-document-link').val(data['document_link']);
                $('#document-edit-button').val(data['post_id']);
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
    });

    $('#document-edit-button').click(function() {
        var id = $(this).val();
        var title = $('#edit-document-name').val();
        var link = $('#edit-document-link').val();
        // Save the post with AJAX
        $.ajax({
            type : 'get',
            url : '{{ URL::to('/document/update') }}',
            data:{"_token": "{{ csrf_token() }}", 'id':id, 'document_title':title, 'document_link':link},
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


</script>
@endsection