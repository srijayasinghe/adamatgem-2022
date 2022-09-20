<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Fine quality gemstones from Sri Lanka and East Africa. Ceylon sapphires, chrysoberyls, spinels, tourmalines, zircons, beryls, garnets and other gems.">

  <title>Adamant Gem Dashboard</title>
  @include('layouts/backend-style.css')

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />

<link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('layouts/backend-style.header')   
        @include('layouts/backend-style.slidebar')  


         <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Dashboard</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="/dashboard">Home</a></li> -->
              <!-- <li class="breadcrumb-item active">Dashboard v1</li>  -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>

  @include('layouts/backend-style.footer')  
  @include('layouts/backend-style.javascript')  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <script>
    
    @if(Session::has('message'))

    var type="{{Session::get('alert-type','info')}}"

    switch(type){
      case 'info':
      toastr.info(" {{Session::get('message')}}");
      break;

      case 'success':
      toastr.success(" {{Session::get('message')}}");
      break;

      case 'warning':
      toastr.warning(" {{Session::get('message')}}");
      break;

      case 'error':
      toastr.error(" {{Session::get('message')}}");
      break;
    }

    @endif
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
<script type="text/javascript">
  $('.colorpicker').colorpicker({});
</script>

{{-- <!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>


<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>


 <script>
  $(function () {
    $('#example25').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


{{-- ...Some more scripts... --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script>
  var uploadedDocumentMap = {}
  Dropzone.options.documentDropzone = {
    url: '{{ route('add.gallery_image') }}',
    maxFilesize: 2, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="gallery_image[]" value="' + response.name + '">')
      uploadedDocumentMap[file.name] = response.name

      console.log(response.name);
    },

    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedDocumentMap[file.name]
      }
      $('form').find('input[name="gallery_image[]"][value="' + name + '"]').remove()
    },
    
    init: function () {
      @if(isset($project) && $project->document)
        var files =
          {!! json_encode($project->document) !!}
        for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="gallery_image[]" value="' + file.file_name + '">')
        }
      @endif
    }
  }
</script>





<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">

$(function(){
  $(document).on('click','#delete',function(e){
    e.preventDefault();

    var link=$(this).attr("href");

    Swal.fire({
            title: 'Are you sure?',
            text: "Delete this Data!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {

      window.location.href=link
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
    )
  }
})


  })
})

</script>



<script src="{{asset('plugins/tinymce/tinymce.min.js')}}"></script>
<script type="text/javascript">

tinymce.init({
    selector: '.tinymce-editor',
    width:'100%',
    height: 250,
    
    browser_spellcheck : true,
    
    menu: {
        file: { 
            title: 'File', 
            items: 'newdocument restoredraft | preview | print' 
        },
       
        edit: { 
            title: 'Edit', 
            items: 'undo redo | cut copy paste | selectall | searchreplace' 
        },
        view: { 
            title: 'View', 
            items: 'code | visualaid visualchars visualblocks | preview fullscreen' 
        },
        insert: { 
            title: 'Insert', 
            items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime' 
        },
        format: { 
            title: 'Format', 
            items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align | forecolor backcolor | removeformat' 
        },
        tools: { 
            title: 'Tools', 
            items: 'code wordcount' 
        },
        table: { 
            title: 'Table', 
            items: 'inserttable | cell row column | tableprops deletetable' 
        },
        help: { 
            title: 'Help', items: 'help' 
        },
        
    },
    plugins: [ 'code', 'lists', 'autolink', 'preview', 'searchreplace', 'wordcount'],
    branding: false,
    mobile: {
        menubar: true
    },
    
});	



 </script>

<script src="{{ asset('plugins/LC-Color-Picker/js/lc_color_picker.js') }}"></script>
<script>
    new lc_color_picker('input[name=color_code]', {
        transparency    : true,
        open_on_focus   : true,
        wrap_width      : '100%',
        no_input_mode : true, 
        preview_style   : {
            input_padding   : 45,
            side            : 'right',
            width           : 50,
        },
        fallback_colors : ['#ff0', 'linear-gradient(90deg, rgba(255, 255, 255, .4), #000)'],
        labels          : [ 
        'click to change color',
        'Solid',
        'Linear Gradient',
        'Radial Gradient',
        'add gradient step',
        'gradient angle',
        'gradient shape',
        'color',
        'opacity',
        ],
        on_change : null,
    });
</script>

<script>
    new lc_color_picker('input[name=color_1]', {
        transparency    : true,
        open_on_focus   : true,
        wrap_width      : '100%',
        no_input_mode : true, 
        preview_style   : {
            input_padding   : 45,
            side            : 'right',
            width           : 50,
        },
        fallback_colors : ['#ff0', 'linear-gradient(90deg, rgba(255, 255, 255, .4), #000)'],
        labels          : [ 
        'click to change color',
        'Solid',
        'Linear Gradient',
        'Radial Gradient',
        'add gradient step',
        'gradient angle',
        'gradient shape',
        'color',
        'opacity',
        ],
        on_change : null,
    });
</script>

<script>
    new lc_color_picker('input[name=color_2]', {
        transparency    : true,
        open_on_focus   : true,
        wrap_width      : '100%',
        no_input_mode : true, 
        preview_style   : {
            input_padding   : 45,
            side            : 'right',
            width           : 50,
        },
        fallback_colors : ['#ff0', 'linear-gradient(90deg, rgba(255, 255, 255, .4), #000)'],
        labels          : [ 
        'click to change color',
        'Solid',
        'Linear Gradient',
        'Radial Gradient',
        'add gradient step',
        'gradient angle',
        'gradient shape',
        'color',
        'opacity',
        ],
        on_change : null,
    });
</script>

<script>
    new lc_color_picker('input[name=color_3]', {
        transparency    : true,
        open_on_focus   : true,
        wrap_width      : '100%',
        no_input_mode : true, 
        preview_style   : {
            input_padding   : 45,
            side            : 'right',
            width           : 50,
        },
        fallback_colors : ['#ff0', 'linear-gradient(90deg, rgba(255, 255, 255, .4), #000)'],
        labels          : [ 
        'click to change color',
        'Solid',
        'Linear Gradient',
        'Radial Gradient',
        'add gradient step',
        'gradient angle',
        'gradient shape',
        'color',
        'opacity',
        ],
        on_change : null,
    });
</script>

<script>
    new lc_color_picker('input[name=color_4]', {
        transparency    : true,
        open_on_focus   : true,
        wrap_width      : '100%',
        no_input_mode : true, 
        preview_style   : {
            input_padding   : 45,
            side            : 'right',
            width           : 50,
        },
        fallback_colors : ['#ff0', 'linear-gradient(90deg, rgba(255, 255, 255, .4), #000)'],
        labels          : [ 
        'click to change color',
        'Solid',
        'Linear Gradient',
        'Radial Gradient',
        'add gradient step',
        'gradient angle',
        'gradient shape',
        'color',
        'opacity',
        ],
        on_change : null,
    });
</script>
<script>
    new lc_color_picker('input[name=color_5]', {
        transparency    : true,
        open_on_focus   : true,
        wrap_width      : '100%',
        no_input_mode : true, 
        preview_style   : {
            input_padding   : 45,
            side            : 'right',
            width           : 50,
        },
        fallback_colors : ['#ff0', 'linear-gradient(90deg, rgba(255, 255, 255, .4), #000)'],
        labels          : [ 
        'click to change color',
        'Solid',
        'Linear Gradient',
        'Radial Gradient',
        'add gradient step',
        'gradient angle',
        'gradient shape',
        'color',
        'opacity',
        ],
        on_change : null,
    });
</script>


  <!-- /.content-wrapper -->
</body>

</html>