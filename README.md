# MplusQapiClient

This 

# Features and Goals

- No runtime WSDL parsing needed.
- Strict typing.
- Increased productivity.

# Notes on how the WSDL is mapped to PHP

- xsd:Date and xsd:DateTime are mapped to \DateTime
- xsd:Decimal is mapped to Brick\BigDecimal
- SoapMplusData and SoapMplusDataTime are converted to \DateTime
- Many longs that contain an unscaled value and their companion decimalplaces are converted to Brick\BigDecimal
- When a list is wrapped in an object containing only that list one level of indirection is removed

# Dependencies

- guzzlehttp/guzzle
- brick/math