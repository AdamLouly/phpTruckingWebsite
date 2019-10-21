-- phpMyAdmin SQL Dump
-- version 4.0.10.15
-- http://www.phpmyadmin.net
--
-- Machine: 10.123.0.209:3307
-- Genereertijd: 09 okt 2017 om 16:00
-- Serverversie: 5.7.15
-- PHP-versie: 5.4.45-0+deb7u11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `casvan7_database`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `testdrivers`
--

CREATE TABLE IF NOT EXISTS `drivers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `applicationDate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `signatureName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `signatureDate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantLastName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantFirstName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantSSN` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantDOB` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantCDL` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantCDLState` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `applicantCDLExpiry` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantCDLIssue` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantCDLExp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantMedicalIssue` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantMedicalExpiry` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantApplying` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantEmail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantOwnerTruck` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantCurrStreet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantCurrCity` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantCurrState` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantCurrZip` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `applicantCurrDuration` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantHomePhone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantCellPhone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantEmergencyName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantEmergencyPhone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantResidenceOneStreet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantResidenceOneCity` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantResidenceOneState` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantResidenceOneZip` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `applicantResidenceOneDuration` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantResidenceTwoStreet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantResidenceTwoCity` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantResidenceTwoState` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantResidenceTwoZip` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `applicantResidenceTwoDuration` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantResidenceThreeStreet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantResidenceThreeCity` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantResidenceThreeState` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantResidenceThreeZip` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `applicantResidenceThreeDuration` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantRightToWork` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `applicantEmployedByUs` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `applicantEmployedByUsFrom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantEmployedByUsTo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantEmployedByUsReasonLeft` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `applicantNowEmployed` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `applicantDateSinceEmployment` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantReferer` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantConvicted` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `applicantConvictedDetails` text COLLATE utf8_unicode_ci NOT NULL,
  `applicantHighSchool` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantHighSchoolCity` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantHighSchoolState` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantHighSchoolGraduated` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `applicantCollege` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantCollegeCity` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantCollegeState` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantCollegeGraduated` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `applicantDrivingSchool` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantDrivingSchoolCity` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantDrivingSchoolState` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantDrivingSchoolCompleted` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `applicantHasDUI` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `applicantDUIDate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantDrugTest` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `applicantDrugTestDate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantDrugTestRefused` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `applicantDrugTestRefusedDate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `accidentOneDate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `accidentOneNature` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `accidentOneFatalities` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `accidentOneInjuries` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `accidentTwoDate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `accidentTwoNature` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `accidentTwoFatalities` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `accidentTwoInjuries` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `accidentThreeDate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `accidentThreeNature` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `accidentThreeFatalities` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `accidentThreeInjuries` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `convictionOneCity` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `convictionOneDate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `convictionOneCharge` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `convictionOnePenalty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `convictionTwoCity` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `convictionTwoDate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `convictionTwoCharge` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `convictionTwoPenalty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `convictionThreeCity` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `convictionThreeDate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `convictionThreeCharge` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `convictionThreePenalty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `licenceOneState` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `licenceOneNO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `licenceOneType` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `licenceOneExp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `licenceTwoState` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `licenceTwoNO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `licenceTwoType` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `licenceTwoExp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `licenceThreeState` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `licenceThreeNO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `licenceThreeType` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `licenceThreeExp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `applicantDeniedLicence` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `applicantRevokedLicence` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `applicantLicenseDetails` text COLLATE utf8_unicode_ci NOT NULL,
  `experienceStraightTruck` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `experienceStraightTruckFrom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `experienceStraightTruckTo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `experienceStraightTruckMiles` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `experienceSemiTrailer` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `experienceSemiTrailerFrom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `experienceSemiTrailerTo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `experienceSemiTrailerMiles` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `experienceTwoTrailers` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `experienceTwoTrailersFrom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `experienceTwoTrailersTo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `experienceTwoTrailersMiles` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `experienceThreeTrailers` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `experienceThreeTrailersFrom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `experienceThreeTrailersTo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `experienceThreeTrailersMiles` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `experienceMotorCoach` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `experienceMotorCoachFrom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `experienceMotorCoachTo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `experienceMotorCoachMiles` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `experienceOther` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `experienceOtherType` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `experienceOtherFrom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `experienceOtherTo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `experienceOtherMiles` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `applicantStatesOperated` text COLLATE utf8_unicode_ci NOT NULL,
  `applicantSpecialCourses` text COLLATE utf8_unicode_ci NOT NULL,
  `applicantAwards` text COLLATE utf8_unicode_ci NOT NULL,
  `applicantOtherExperience` text COLLATE utf8_unicode_ci NOT NULL,
  `applicantOtherTraining` text COLLATE utf8_unicode_ci NOT NULL,
  `applicantOtherEquipment` text COLLATE utf8_unicode_ci NOT NULL,
  `applicantSignatureFinal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `applicantSignatureDate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
