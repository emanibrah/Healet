<!DOCTYPE html>
<html>

<head>
@include('includes.head')
</head>

<body>

@yield('content') 
  <!-- info section -->
  @include('includes.info')

  <!-- end info_section -->

  <!-- footer section -->
  @include('includes.footer')

  <!-- footer section -->

  @include('includes.js')

 
</body>

</html>