$(function(){
	Dropzone.options.myDrop = {
		uploadMultiple : true,
		//maxFileSize : 2,
		//acceptedFiles : 'image/*',

		init : function init(){
			this.on('error', function(){
				alert('Erro no upload');
			});
		}
	};
});