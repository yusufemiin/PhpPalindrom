<?php

function isPalindrome($str) {
    $str = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $str)); // Özel karakterleri ve boşlukları kaldırıp, tüm harfleri küçültelim
    $reverse = strrev($str); // Diziyi ters çevirelim
    return $str === $reverse; // Ters çevrilen dizi ile orijinal dizi karşılaştıralım
 }
 
 function findPalindromes($text) {
    $words = preg_split('/\s+/', $text); // Metni boşluklara göre bölelim ve kelimeleri elde edelim
 
    $palindromes = array(); // Palindrom kelimeleri tutmak için boş bir dizi oluşturalım
 
    foreach ($words as $word) {
       if (isPalindrome($word)) {
          $palindromes[] = $word; // Palindrom kelimeyi diziye ekleyelim
       }
    }
 
    return $palindromes; // Palindrom kelimeleri içeren diziyi döndürelim
 }
 
 $text = "Günün birinde, radar la başlayan bir gizemli serüvene çıkma kararı aldım. 
 Yolda ilerlerken, bir level atladım ve etrafımdaki referanslar la dolu bir dünyaya adım attım. 
 Bu dünya, kelimenin tam anlamıyla bir kavak ormanı gibiydi, her yöne baktıkça kendimi aynı okunuşa sahip bu palindrom kelimelerle çevrili hissettim. Aniden, bir ada belirdi gözlerimizin önünde, sanki harfler arasında bir ara nokta gibi duruyordu. Adanın gizemini keşfederken, bir neben ile karşılaştım, dilimde gezen bu palindrom kelimeler, maceramı daha da ilginç kılıyordu. Sonunda, palindrom kelime sarmalının içinde kaybolmuş gibiydim, adeta bir level atlayarak kelime dünyasında eşsiz bir seres yaşamış gibi hissettim.."; // Test için bir metin
 
 $palindromes = findPalindromes($text);
 
 echo "Palindrom kelimeler: ";
 foreach ($palindromes as $palindrome) {
    echo $palindrome . " ";
 }
 /* 
 Bu örnekte, isPalindrome fonksiyonu bir kelimenin palindrom olup olmadığını kontrol ediyoruz. 
 İlk olarak, özel karakterleri ve boşlukları kaldırıyoruz ve tüm harfleri küçültüyoruz. 
 Daha sonra, strrev fonksiyonunu kullanarak kelimeyi ters çevirip orjinal kelime ile karşılaştırıyoruz. 
 Eğer ters çevrilen kelimeyle orjinal kelime aynı ise, kelime bir palindromdur.
findPalindromes fonksiyonu metni boşluklara göre bölüyor ve her kelimeyi isPalindrome fonksiyonuna gönderiyor. 
Eğer bir kelime palindrom ise, palindromes dizisine ekleniyor. Son olarak, palindromes dizisi ekrana yazdırılıyor.
 */
?>


