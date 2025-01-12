# Laravel AI Tools
A simple Laravel package for integrating AI APIs (e.g., OpenAI).

## Installation

1. Install via Composer:
   ```bash
   composer require Nouman/laravel-ai-tools
   
**Usage**
Once the package is installed and configured, you can use the AiTools facade to interact with the AI API (such as OpenAI).

1. Installation
To install the package, run the following command:
composer require Nouman/laravel-ai-tools

2. Publish the Configuration
After installing the package, publish the configuration file to allow customization (e.g., setting the API key):

php artisan vendor:publish --provider="Nouman\LaravelAiTools\PackageServiceProvider" --tag=config

This will generate a file at config/ai-tools.php

4. Set Your API Key
In your .env file, add the API key for the AI service you want to use (e.g., OpenAI):

AI_API_KEY=your-api-key-here

Make sure to replace your-api-key-here with your actual API key.

6. Usage Example
Once everything is set up, you can use the package to interact with the AI API.

Example: Generating AI Text
use AiTools;
// Generate AI-powered response

Route::get('/generate-text', function () 
{
$text = 'What is Laravel?';
    $response = AiTools::generateText($text);
    return response()->json($response);
}
);
    
Example: Using in Controller
You can also use the AI service within a controller:
use AiTools;
// Generate AI-powered response

class AiController extends Controller
{
    public function generateText()
    {
        $text = 'What is AI?';
        $response = AiTools::generateText($text);
        return response()->json($response);
    }
}

In the above examples, the generateText method is assumed to be a method in your AiToolsService that communicates with the AI API.

5. Error Handling
If there’s an issue with the API key or communication with the AI service, ensure proper error handling:
try {
    $response = AiTools::generateText('What is Laravel?');
    return response()->json($response);
} catch (\Exception $e) {
    return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()]);
}

License
MIT
---

This should provide a clear and easy-to-follow guide for others to use your package in their Laravel projects. Let me know if you'd like to expand on any part!
