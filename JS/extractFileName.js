function extractFileName(dirtyFileName) {
    return RegExp('_([\\w]+).([\\w]+)').exec(dirtyFileName).slice(1).join('.');
}

console.log(extractFileName("1231231223123131_myFile.tar.gz2"));
console.log(extractFileName("1231231223123131_FILE_NAME.EXTENSION.OTHEREXTENSION"));
console.log(extractFileName("1_This_is_an_otherExample.mpg.OTHEREXTENSIONadasdassdassds34"));