# CHANGELOG

## 2020-12-18, v1.13.0

Several fixes and new additions in this release. A lot of cleanup has been done
on the codebase on both tests and consistency.

- Feature/pl pl license plate (#62)
- Fix greek phone numbers (#16)
- Move AT payment provider logic to de_AT (#72)
- Fix wiktionary links (#73)
- Fix AT person links (#74)
- Fix AT cities (#75)
- Deprecate at_AT providers (#78)
- Add Austrian `ssn()` to `Person` provider (#79)
- Fix typos in id_ID Address (#83)
- Austrian post codes (#86)
- Updated Polish data (#70)
- Improve Austrian social security number generation (#88)
- Move US phone numbers with extension to own method (#91)
- Add UK National Insurance number generator (#89)
- Fix en_SG phone number generator (#100)
- Remove usage of mt_rand (#87)
- Remove whitespace from beginning of el_GR phone numbers (#105)
- Building numbers can not be 0, 00, 000 (#107)
- Add 172.16/12 local IPv4 block (#121)
- Add JCB credit card type (#124)
- Remove json_decode from emoji generation (#123)
- Remove ro street address (#146)

## 2020-12-11, v1.12.1

This is a security release that prevents a hacker to execute code on the server.

## 2020-11-23, v1.12.0

- Fix ro_RO first and last day of year calculation offset (#65)
- Fix en_NG locale test namespaces that did not match PSR-4 (#57)
- Added Singapore NRIC/FIN provider (#56)
- Added provider for Lithuanian municipalities (#58)
- Added blood types provider (#61)

## 2020-11-15, v1.11.0

- Added Provider for Swedish Municipalities
- Updates to person names in pt_BR
- Many code style changes

## 2020-10-28, v1.10.1

- Updates the Danish addresses in dk_DK
- Removed offense company names in nl_NL
- Clarify changelog with original fork
- Standin replacement for LoremPixel to Placeholder.com (#11)

## 2020-10-27, v1.10.0

- Support PHP 7.1-8.0
- Fix typo in de_DE Company Provider
- Fix dateTimeThisYear method
- Fix typo in de_DE jobTitleFormat
- Fix IBAN generation for CR
- Fix typos in greek first names
- Fix US job title typo
- Do not clear entity manager for doctrine orm populator
- Remove persian rude words
- Corrections to RU names

## 2020-10-27, v1.9.1

- Initial version. Same as `fzaninotto/Faker:v1.9.1`.
