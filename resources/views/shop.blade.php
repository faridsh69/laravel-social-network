@extends('layout.master')
@section('container')
<div class="seperate"></div>
<div class="row">
	<div class="col-xs-3">
	  	<select class="form-control" id="image_id">
	  		@for($i = 1 ; $i < 5 ; $i++ )
	    	<option {{$image_id == $i ?  'selected' : ''}}> {{ $i }} </option>
	    	@endfor
	  	</select>
	</div>
	<div class="col-xs-9"> 
		<h3 class="text-center white-text">
			سالن شماره :
			{{ \Nopaad\persian::correct($image_id) }}
		</h3>
	</div>
	<div class="col-xs-3"> 
		<button onclick="goToPage()" class="btn btn-block btn-default"> GO !</a>
	</div>
</div>
<div class="seperate"></div>
@endsection
@push('script')
	<script src="/public/js/three.min.js"></script>	
	<script src="/public/js/OrbitControls.js"></script>		
	<script> 
		var _0x5788=["val","#image_id","assign","location","innerWidth","innerHeight","mousemove","addEventListener","set","position","add","/public/img/","px.jpg","nx.jpg","py.jpg","ny.jpg","pz.jpg","nz.jpg","load","format","RGBFormat","mapping","CubeReflectionMapping","/public/img/3d/{{$image_id}}.jpg","EquirectangularReflectionMapping","magFilter","LinearFilter","minFilter","LinearMipMapLinearFilter","","SphericalReflectionMapping","equirect","ShaderLib","fragmentShader","vertexShader","uniforms","BackSide","value","tEquirect","cube","tCube","autoClear","devicePixelRatio","setPixelRatio","setSize","setFaceCulling","domElement","appendChild","body","resize","clientX","clientY","aspect","updateProjectionMatrix","y","rotation","render"];function goToPage(){window[_0x5788[3]][_0x5788[2]]($(_0x5788[1])[_0x5788[0]]())}var controls,camera,scene,renderer;var cameraCube,sceneCube;var textureEquirec,textureCube,textureSphere;var cubeMesh,sphereMesh;var sphereMaterial;var refract;var mouseX=0,mouseY=0;var windowHalfX=window[_0x5788[4]]/ 2;var windowHalfY=window[_0x5788[5]]/ 2;document[_0x5788[7]](_0x5788[6],onDocumentMouseMove,false);init();animate();function init(){camera=  new THREE.PerspectiveCamera(70,window[_0x5788[4]]/ window[_0x5788[5]],1,100000);camera[_0x5788[9]][_0x5788[8]](0,0,80);cameraCube=  new THREE.PerspectiveCamera(70,window[_0x5788[4]]/ window[_0x5788[5]],1,100000);cameraCube[_0x5788[9]][_0x5788[8]](0,0,0);scene=  new THREE.Scene();sceneCube=  new THREE.Scene();var _0x92f1x14= new THREE.AmbientLight(0xffffff);scene[_0x5788[10]](_0x92f1x14);var _0x92f1x15=_0x5788[11];var _0x92f1x16=[_0x92f1x15+ _0x5788[12],_0x92f1x15+ _0x5788[13],_0x92f1x15+ _0x5788[14],_0x92f1x15+ _0x5788[15],_0x92f1x15+ _0x5788[16],_0x92f1x15+ _0x5788[17]];textureCube=  new THREE.CubeTextureLoader()[_0x5788[18]](_0x92f1x16);textureCube[_0x5788[19]]= THREE[_0x5788[20]];textureCube[_0x5788[21]]= THREE[_0x5788[22]];var _0x92f1x17= new THREE.TextureLoader();textureEquirec= _0x92f1x17[_0x5788[18]](_0x5788[23]);textureEquirec[_0x5788[21]]= THREE[_0x5788[24]];textureEquirec[_0x5788[25]]= THREE[_0x5788[26]];textureEquirec[_0x5788[27]]= THREE[_0x5788[28]];textureSphere= _0x92f1x17[_0x5788[18]](_0x5788[29]);textureSphere[_0x5788[21]]= THREE[_0x5788[30]];var _0x92f1x18=THREE[_0x5788[32]][_0x5788[31]];var _0x92f1x19= new THREE.ShaderMaterial({fragmentShader:_0x92f1x18[_0x5788[33]],vertexShader:_0x92f1x18[_0x5788[34]],uniforms:_0x92f1x18[_0x5788[35]],depthWrite:false,side:THREE[_0x5788[36]]});_0x92f1x19[_0x5788[35]][_0x5788[38]][_0x5788[37]]= textureEquirec;var _0x92f1x1a=THREE[_0x5788[32]][_0x5788[39]];var _0x92f1x1b= new THREE.ShaderMaterial({fragmentShader:_0x92f1x1a[_0x5788[33]],vertexShader:_0x92f1x1a[_0x5788[34]],uniforms:_0x92f1x1a[_0x5788[35]],depthWrite:false,side:THREE[_0x5788[36]]});_0x92f1x1b[_0x5788[35]][_0x5788[40]][_0x5788[37]]= textureEquirec;cubeMesh=  new THREE.Mesh( new THREE.BoxGeometry(100,100,100),_0x92f1x19);sceneCube[_0x5788[10]](cubeMesh);radios= 20;var _0x92f1x1c= new THREE.SphereGeometry(radios,124,124);sphereMaterial=  new THREE.MeshLambertMaterial({envMap:textureEquirec});sphereMesh=  new THREE.Mesh(_0x92f1x1c,sphereMaterial);scene[_0x5788[10]](sphereMesh);renderer=  new THREE.WebGLRenderer();renderer[_0x5788[41]]= false;renderer[_0x5788[43]](window[_0x5788[42]]);renderer[_0x5788[44]](window[_0x5788[4]],window[_0x5788[5]]);renderer[_0x5788[45]](THREE.CullFaceNone);document[_0x5788[48]][_0x5788[47]](renderer[_0x5788[46]]);window[_0x5788[7]](_0x5788[49],onWindowResize,false)}function onDocumentMouseMove(_0x92f1x1e){mouseX= -(_0x92f1x1e[_0x5788[50]]- windowHalfX)/ windowHalfX;mouseY= -(_0x92f1x1e[_0x5788[51]]- windowHalfY)/ windowHalfY}function onWindowResize(){camera[_0x5788[52]]= window[_0x5788[4]]/ window[_0x5788[5]];camera[_0x5788[53]]();cameraCube[_0x5788[52]]= window[_0x5788[4]]/ window[_0x5788[5]];cameraCube[_0x5788[53]]();renderer[_0x5788[44]](window[_0x5788[4]],window[_0x5788[5]])}function animate(){requestAnimationFrame(animate);render()}function render(){cameraCube[_0x5788[55]][_0x5788[54]]+= ((2.3* mouseX- cameraCube[_0x5788[55]][_0x5788[54]])* 0.2);renderer[_0x5788[56]](sceneCube,cameraCube)}
	</script>
@endpush