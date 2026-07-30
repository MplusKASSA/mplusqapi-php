# MplusAPI Client

This client is generated with the [wsdl2htmldocs](https://gitlab.com/eelke/wsdl2htmldocs) tool.

# Features and Goals

- no runtime wsdl parsing
- strict typing
- increase productivity

# Notes on how the WSDL is mapped to PHP

- xsd:Date and xsd:DateTime are mapped to \DateTime
- xsd:Decimal is mapped to Brick\BigDecimal
- SoapMplusData and SoapMplusDataTime are converted to \DateTime
- Many longs that contain an unscaled value and their companion decimalplaces are converted to Brick\BigDecimal
- When a list is wrapped in an object containing only that list one level of indirection is removed

# Dependencies

- guzzlehttp/guzzle
- brick/math

# Generate instructions

You need `wsdl2htmldocs`

Place the wsdl of the correct api version in the `inputs` folder.

Run command similar to this
```
wsdl2htmldocs.exe @inputs/parameters.rsp
```