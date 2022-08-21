DROP DATABASE IF EXISTS teamElite;

CREATE DATABASE teamElite;
USE teamElite;

CREATE TABLE coach
(school CHAR(20),
sport CHAR(15),
season CHAR(15),
age DECIMAL(2,0),
teamCode CHAR(20) PRIMARY KEY);

CREATE TABLE exercise
(teamCode CHAR(20),
exerciseGoal CHAR(15) PRIMARY KEY,
goalCode CHAR(5),
exerciseIntensity CHAR(15),
intensityCode CHAR(5));

CREATE TABLE cardio
(cardioExercise CHAR(15),
cardioTime DECIMAL(2,0),
cardioCode CHAR(5));

CREATE TABLE core
(exerciseName CHAR(20),
coreCode CHAR(5) PRIMARY KEY,
repetition DECIMAL(2,0),
sets DECIMAL(2,0));

CREATE TABLE lower
(exerciseName CHAR(20),
goalCode CHAR(5),
repetition DECIMAL(2,0),
sets DECIMAL(2,0),
intensityCode CHAR(5),
coreSet CHAR(5),
cardioSet CHAR(5));

CREATE TABLE upper
(exerciseName CHAR(20),
focusCode CHAR(5),
repetition DECIMAL(2,0),
sets DECIMAL(2,0),
intensityCode CHAR(5),
coreSet CHAR(5),
cardioSet CHAR(5));