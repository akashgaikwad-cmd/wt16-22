$(document).ready(function () {
    function sortArray(arr) {
      return arr.sort((a, b) => a - b);
    }
  
    function searchArray(arr, element) {
      return arr.includes(element);
    }
  
    $('#addInteger').click(function () {
      let integerInput = $('#integerInput').val();
      if (integerInput) {
        $("#integerList").append('<option>' + integerInput + '</option>');
        $('#integerInput').val('');
      }
    });
  
    $('#sortInteger').click(function () {
      let integerArray = $('#integerList option').map(function () {
        return parseInt($(this).text());
      }).get();
      let sortedArray = sortArray(integerArray);
      $('#integerList').empty();
      sortedArray.forEach(function (value) {
        $('#integerList').append('<option>' + value + '</option>');
      });
      $('#integerResult').text('Sorted Array: ' + sortedArray.join(', '));
    });
  
    $('#searchInteger').click(function () {
      let searchElement = parseInt($('#integerSearchInput').val());
      let integerArray = $('#integerList option').map(function () {
        return parseInt($(this).text());
      }).get();
      let found = searchArray(integerArray, searchElement);
      $('#integerResult').text(found ? 'Element found!' : 'Element not found!');
    });
  
    $('#addEntity').click(function () {
      let entityInput = $('#entityInput').val();
      if (entityInput) {
        $("#entityList").append('<option>' + entityInput + '</option>');
        $('#entityInput').val('');
      }
    });
  
    $('#sortEntity').click(function () {
      let entityArray = $('#entityList option').map(function () {
        return $(this).text();
      }).get();
      let sortedArray = entityArray.sort();
      $('#entityList').empty();
      sortedArray.forEach(function (value) {
        $('#entityList').append('<option>' + value + '</option>');
      });
      $('#entityResult').text('Sorted Array: ' + sortedArray.join(', '));
    });
  
    $('#searchEntity').click(function () {
      let searchElement = $('#entitySearchInput').val();
      let entityArray = $('#entityList option').map(function () {
        return $(this).text();
      }).get();
      let found = searchArray(entityArray, searchElement);
      $('#entityResult').text(found ? 'Entity found!' : 'Entity not found!');
    });
  });
  